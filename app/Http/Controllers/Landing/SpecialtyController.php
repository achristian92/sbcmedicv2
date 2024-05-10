<?php

namespace App\Http\Controllers\Landing;

use \App\Http\Controllers\Controller;
use App\SoftMedic\Service\Specialties\Requests\SpecialtyLandingRequest;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Tools\UploadableTrait;
use Illuminate\Support\Facades\Log;

class SpecialtyController extends Controller
{
    use UploadableTrait;

    public function index()
    {
        $specialties = Specialty::getListActives();

        return view('landing.specialties.index', [
            'specialties' => $specialties
        ]);
    }

    public function edit(Specialty $especialidade)
    {
        return view('landing.specialties.edit', [
            'model' => $especialidade
        ]);
    }

    public function update(SpecialtyLandingRequest $request, Specialty $especialidade)
    {
        $files = [];
        $src_img = null;
        $src_icon = null;

        $folder = 'specialties/' . $especialidade->getIdAttribute() . '/landing';
        if ($request->hasFile('attachment_img')) {
            $src_img = $this->handleUploadedImage($request->file('attachment_img'), $folder);
        }
        if ($request->hasFile('attachment_icon')) {
            $src_icon = $this->handleUploadedImage($request->file('attachment_icon'), $folder);
        }


        if ($src_img) $files['web_src_img'] = $src_img;
        if ($src_icon) $files['web_src_icon'] = $src_icon;
        $especialidade->update(array_merge($request->validated(), $files));

        return redirect()->route('landing.especialidades.index')->with('message', 'Registro actualizado');
    }
}
