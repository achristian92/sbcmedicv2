<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\SoftMedic\General\Districts\Department;
use App\SoftMedic\General\DocumentTypes\DocumentType;
use App\SoftMedic\General\Locals\Local;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use App\SoftMedic\Settings\Doctors\Requests\DoctorLandingRequest;
use Illuminate\Support\Facades\Log;
use App\SoftMedic\Tools\UploadableTrait;

class DoctorController extends Controller
{
    use UploadableTrait;

    public function index()
    {
        $doctors = Doctor::with(['specialty', 'local'])->orderBy('firstname')->get();

        return view('landing.doctors.index', [
            'doctors' => $doctors,
        ]);
    }

    public function edit(Doctor $doctore)
    {
        $locals = Local::getListActives();

        return view('landing.doctors.edit', [
            'model' => $doctore,
            'specialties' => Specialty::getListActives(),
            'locals' => $locals
        ]);
    }

    public function update(DoctorLandingRequest $request, Doctor $doctore)
    {
        $files = [];
        $src_img = null;
        $data = $request->validated();

        if (!$request->has('web_is_active'))
            $data['web_is_active'] = '0';

        if ($request->hasFile('attachment_img')) {
            $folder = 'doctors/' . $doctore->getIdAttribute() . '/landing';
            $src_img = $this->handleUploadedImage($request->file('attachment_img'), $folder);
        }

        if ($src_img) $files['web_src_img'] = $src_img;
        $doctore->update(array_merge($data, $files));

        return redirect()->route('landing.doctores.index')->with('message', 'Registro actualizado');
    }
}
