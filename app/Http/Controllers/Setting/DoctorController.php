<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\SoftMedic\General\Districts\District;
use App\SoftMedic\General\DocumentTypes\DocumentType;
use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use App\SoftMedic\Settings\Doctors\Requests\DoctorRequest;
use App\SoftMedic\Settings\Roles\Rol;
use Illuminate\Support\Facades\Auth;


class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('specialty')->orderBy('firstname')->paginate();

        if(request('show') !== 'all')
            $doctors = Doctor::with('specialty')->where('status',1)->orderBy('firstname')->paginate();

        return view('setting.doctors.index',compact('doctors'));
    }

    public function create()
    {
        return view('setting.doctors.create',[
            'model' =>  new Doctor(),
            'documentTypes' => DocumentType::all(),
            'specialties' => Specialty::getListActives(),
            'districts' => District::where('province_id',1501)->orderBy('name')->get()
        ]);
    }

    public function store(DoctorRequest $request)
    {
        $doctor = Doctor::create($request->validated());

        $user = User::find($doctor->nro_document);
        if(!$user) {
            $user = User::create([
                'username'     => $doctor->nro_document,
                'password'     => bcrypt($doctor->nro_document),
                'idRol'        => Rol::DOCTOR_TYPE,
                'status'       => 1,
                'password_raw' => $doctor->nro_document,
            ]);

            $doctor->idUsuario = $user->id;
            $doctor->save();
        }

        Patient::create($this->dataToPatient($doctor));

        return redirect()->route('setting.doctors.index')->with('message','Registro guardado');
    }

    public function edit(Doctor $doctor)
    {
        return view('setting.doctors.edit',[
            'model'         => $doctor,
            'documentTypes' => DocumentType::all(),
            'specialties'   => Specialty::getListActives(),
            'districts'     => District::where('province_id',1501)->orderBy('name')->get()
        ]);
    }

    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();
        unset($data['nro_document']);

        $doctor->update($data);

        $patient = Patient::firstWhere('document',$doctor->nro_document);
        if($patient)
            $patient->update($this->dataToPatient($doctor));

        return redirect()->route('setting.doctors.index')->with('message','Registro guardado');
    }

    private function dataToPatient(Doctor $doctor)
    {
        return [
            'idTypeDocument'    => $doctor->document_type_id,
            'document'          => $doctor->nro_document,
            'firstname'         => $doctor->firstname,
            'lastname'          => $doctor->lastname,
            'email'             => $doctor->email,
            'phone'             => $doctor->phone,
            'birthdate'         => $doctor->birthdate,
            'idDistrict'        => $doctor->district_id,
            'address'           => $doctor->address,
            'sex'               => $doctor->gender,
            'idUsuario'         => $doctor->idUsuario,
            'idCanalVenta'      => 20,
            'idUsuarioCreacion' => Auth::id(),
            'fechaCreacion'     => now()
        ];
    }
}
