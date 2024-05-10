<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\SoftMedic\General\Districts\District;
use App\SoftMedic\General\DocumentTypes\DocumentType;
use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Settings\Roles\Rol;
use App\SoftMedic\Settings\Users\Requests\UserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        //$users = User::paginate();
        $search = request()->input('q');
        $status = request()->input('status');

        $patients = DB::table('users')
            ->select('patients.document','patients.firstname','patients.lastname','patients.email','patients.phone','patients.birthdate','patients.sex','rol.descripcion as rol','users.status','users.idUser as id')
            ->join('rol','users.idRol','=','rol.id')
            ->rightJoin('patients', 'users.idUser', '=', 'patients.idUsuario')
            ->where('users.idRol',Rol::CUSTOMER_TYPE)
            ->when($search, function ($query) use ($search) {
                $query->where(function($query) use ($search) {
                    $query->where('patients.document','like','%'.$search.'%')
                        ->orWhere('patients.firstname','like','%'.$search.'%')
                        ->orWhere('patients.lastname','like','%'.$search.'%')
                        ->orWhere('patients.email','like','%'.$search.'%');
                });
            })
            ->when(!is_null($status) && in_array($status,[0,1]), function ($query) use ($status) {
                $query->Where('users.status',$status);
            })
            ->orderBy('firstname')
            ->paginate(25);

        //dd($users);

        return view('patients.index',[
            'patients' => $patients,
        ]);
    }

    public function create()
    {
        return view('setting.users.create',[
            'model' =>  new User(),
            'documentTypes' => DocumentType::all(),
            'districts' => District::orderBy('name')->get(),
            'roles' => Rol::whereIn('id',[Rol::CUSTOMER_TYPE])->orderBy('descripcion')->get()
        ]);
    }

    public function store(UserRequest $request)
    {
        $patient = Patient::firstWhere('document',$request->document);

        if($patient)
            return redirect()->route('setting.users.index')->with('error','Usuario existente');

        $pat = Patient::create($request->validated()+['idCanalVenta' => 20,'idUsuarioCreacion' => Auth::id()]);

        $user = User::create([
            'username'     => $request->document,
            'password'     => md5(base64_encode($request->document)),
            'idRol'        => $request->idRol,
            'status'       => 1,
            'password_raw' => $request->document,
        ]);


        $pat->idUsuario = $user->id;
        $pat->save();

        return redirect()->route('setting.users.index')->with('message','Registro guardado');
    }

    public function edit(Patient $patient)
    {
        $newModel = new User();
        $newModel->idPatient = $patient->idPatient;
        $newModel->idTypeDocument = $patient->idTypeDocument;
        $newModel->document = $patient->document;
        $newModel->firstname = $patient->firstname;
        $newModel->lastname = $patient->lastname;
        $newModel->email = $patient->email;
        $newModel->phone = $patient->phone;
        $newModel->birthdate = Carbon::parse($patient->birthdate);
        $newModel->sex = $patient->sex;
        $newModel->idRol = $patient->user->idRol;
        $newModel->idDistrict = $patient->idDistrict;
        $newModel->address = $patient->address;
        $newModel->status = $patient->user->status;


        return view('setting.users.edit',[
            'model'         => $newModel,
            'documentTypes' => DocumentType::all(),
            'districts' => District::orderBy('name')->get(),
            'roles' => Rol::whereIn('id',[Rol::CUSTOMER_TYPE])->orderBy('descripcion')->get()
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();
        unset($data['idRol']);
        unset($data['status']);

        $user->patient()->update($data);
        $user->update([
            'username'     => $request->document,
            'password'     => md5(base64_encode($request->document)),
            'idRol'        => $request->idRol,
            'status'       => $request->status,
            'password_raw' => $request->document,
        ]);

        return redirect()->route('setting.users.index')->with('message','Registro guardado');
    }
}
