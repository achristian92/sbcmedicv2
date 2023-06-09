<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\SoftMedic\General\Locals\Local;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorsController extends Controller
{
    public function index(Request $request)
    {
        $specialities = Specialty::where('web_is_active', true)->orderBy('name')->get();
        $locals = Local::getListActives();
        $doctors = Doctor::with('specialty')
            ->whereNotNull('idSpecialty')
            ->where('web_is_active', true);
        if ($request->name) {
            $doctors = $doctors->where('firstname', 'LIKE', "%{$request->name}%")
                ->orWhere('lastname', 'LIKE', "%{$request->name}%");
        }
        if ($request->specialty_id) {
            $doctors = $doctors->where('idSpecialty', $request->specialty_id);
        }
        if ($request->local_id) {
            $doctors = $doctors->where('local_id', $request->local_id);
        }
        $doctors = $doctors->paginate(15);

        return view('root.doctors.index', [
            'doctors' => $doctors,
            'specialities' => $specialities,
            'locals' => $locals
        ]);
    }

    public function show(Doctor $doctor)
    {
        return view('root.doctors.show', [
            'doctor' => $doctor
        ]);
    }
}
