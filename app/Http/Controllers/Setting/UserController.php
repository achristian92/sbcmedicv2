<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\SoftMedic\General\Departments\Department;
use App\SoftMedic\General\Districts\District;
use App\SoftMedic\General\DocumentTypes\DocumentType;
use App\SoftMedic\General\Provinces\Province;
use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use App\SoftMedic\Settings\Doctors\Requests\DoctorRequest;
use App\SoftMedic\Settings\Permissions\Permission;
use App\SoftMedic\Settings\Roles\Rol;
use App\SoftMedic\Settings\Users\Requests\UserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        //$users = User::paginate();
        $search = request()->input('q');
        $rolID = request()->input('rol_id');
        $status = request()->input('status');

        $users = DB::table('users')
                ->select('patients.document','patients.firstname','patients.lastname','patients.email','patients.phone','patients.birthdate','patients.sex','rol.descripcion as rol','users.status','users.idUser as id')
                ->whereNotIn('users.idRol',[Rol::CUSTOMER_TYPE,Rol::DOCTOR_TYPE])
                ->join('rol','users.idRol','=','rol.id')
                ->rightJoin('patients', 'users.idUser', '=', 'patients.idUsuario')
                ->when($search, function ($query) use ($search) {
                    $query->where(function($query) use ($search) {
                        $query->where('patients.document','like','%'.$search.'%')
                            ->orWhere('patients.firstname','like','%'.$search.'%')
                            ->orWhere('patients.lastname','like','%'.$search.'%')
                            ->orWhere('patients.email','like','%'.$search.'%');
                    });
                })
                ->when($rolID, function ($query) use ($rolID) {
                    $query->Where('users.idRol',$rolID);
                })
                ->when(!is_null($status) && in_array($status,[0,1]), function ($query) use ($status) {
                    $query->Where('users.status',$status);
                })
                ->orderBy('firstname')
                ->paginate(25);

        //dd($users);

        return view('setting.users.index',[
            'users' => $users,
            'roles' => Rol::whereNotIn('id',[Rol::CUSTOMER_TYPE,Rol::DOCTOR_TYPE])->orderBy('descripcion')->get()
        ]);
    }

    public function create()
    {
        return view('setting.users.create',[
            'model' =>  new User(),
            'documentTypes' => DocumentType::all(),
            'districts' => District::orderBy('name')->get(),
            'roles' => Rol::whereNotIn('id',[Rol::CUSTOMER_TYPE,Rol::DOCTOR_TYPE])->orderBy('descripcion')->get()
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

    public function edit(User $user)
    {
        $newModel = new User();
        $newModel->idUser = $user->idUser;
        $newModel->idTypeDocument = $user->patient->idTypeDocument;
        $newModel->document = $user->patient->document;
        $newModel->firstname = $user->patient->firstname;
        $newModel->lastname = $user->patient->lastname;
        $newModel->email = $user->patient->email;
        $newModel->phone = $user->patient->phone;
        $newModel->birthdate = Carbon::parse($user->patient->birthdate);
        $newModel->sex = $user->patient->sex;
        $newModel->idRol = $user->idRol;
        $newModel->idDistrict = $user->patient->idDistrict;
        $newModel->address = $user->patient->address;
        $newModel->status = $user->status;

        return view('setting.users.edit',[
            'model'         => $newModel,
            'documentTypes' => DocumentType::all(),
            'districts' => District::orderBy('name')->get(),
            'roles' => Rol::whereNotIn('id',[Rol::CUSTOMER_TYPE,Rol::DOCTOR_TYPE])->orderBy('descripcion')->get()
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
