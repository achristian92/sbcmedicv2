<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Service\Procedures\Procedure;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use App\SoftMedic\Settings\Roles\Rol;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index()
    {

        $users = User::where('idRol',Rol::DOCTOR_TYPE)->get();

        Patient::whereIn('idUsuario',$users->pluck('id'))->get()
            ->map(function ($patient) {
                $doctor = Doctor::firstWhere('idUsuario',$patient->idUsuario);
                if($doctor)
                    $doctor->update([
                        'document_type_id'  => $patient->idTypeDocument,
                        'nro_document'      => $patient->document,
                        'firstname'         => $patient->firstname,
                        'lastname'          => $patient->lastname,
                        'email'             => $patient->email,
                        'phone'             => $patient->phone,
                        'birthdate'         => $patient->birthdate,
                        'district_id'       => $patient->idDistrict,
                        'address'           => $patient->address,
                        'gender'            => $patient->sex,
                    ]);
            });

        dd("Fin Update x2");
    }
}
