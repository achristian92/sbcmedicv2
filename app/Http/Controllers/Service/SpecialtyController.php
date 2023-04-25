<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\SoftMedic\Service\Specialties\Requests\SpecialtyRequest;
use App\SoftMedic\Service\Specialties\Specialty;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = Specialty::orderBy('name')->paginate();

        if(request('show') !== 'all')
            $specialties = Specialty::where('status',1)->orderBy('name')->paginate();

        return view('service.specialties.index',compact('specialties'));
    }

    public function create()
    {
        return view('service.specialties.create',[
            'model' =>  new Specialty()
        ]);
    }

    public function store(SpecialtyRequest $request)
    {
        Specialty::create($request->validated());

        return redirect()->route('service.specialties.index')->with('message','Registro guardado');
    }

    public function edit(Specialty $specialty)
    {
        return view('service.specialties.edit',[
            'model' => $specialty
        ]);
    }

    public function update(SpecialtyRequest $request, Specialty $specialty)
    {
        $specialty->update($request->validated());

        return redirect()->route('service.specialties.index')->with('message','Registro guardado');
    }
}
