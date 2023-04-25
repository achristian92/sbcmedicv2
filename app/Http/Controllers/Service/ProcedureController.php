<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\SoftMedic\General\ReasonAppointments\ReasonAppointment;
use App\SoftMedic\Service\Procedures\Procedure;
use App\SoftMedic\Service\Procedures\Requests\ProcedureRequest;
use App\SoftMedic\Service\Specialties\Specialty;
use Illuminate\Support\Str;


class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::with('specialty','reasonappointment')->orderBy('idEspecialidad')->get();

        if(request('show') !== 'all')
            $procedures = Procedure::where('status',1)->with('specialty','reasonappointment')->orderBy('idEspecialidad')->get();

        return view('service.procedures.index',compact('procedures'));
    }

    public function create()
    {
        return view('service.procedures.create',[
            'model' =>  new Procedure(),
            'specialities' => Specialty::getListActives(),
            'reasonAppointments' => ReasonAppointment::getListActives()
        ]);
    }

    public function store(ProcedureRequest $request)
    {
        $specialty = Specialty::find($request->idEspecialidad);
        $prefix = strtoupper(Str::substr($specialty->name, 0,3));
        $next_number = (int) Str::substr(Procedure::latest()->first()['codigo_interno'],3) + 1;

        Procedure::create($request->validated()+ [
            'codigo_interno' => $prefix.$next_number
        ]);

        return redirect()->route('service.procedures.index')->with('message','Registro guardado');
    }

    public function edit(Procedure $procedure)
    {
        return view('service.procedures.edit',[
            'model' => $procedure,
            'specialities' => Specialty::getListActives(),
            'reasonAppointments' => ReasonAppointment::getListActives()
        ]);
    }

    public function update(ProcedureRequest $request, Procedure $procedure)
    {
        $procedure->update($request->validated());

        return redirect()->route('service.procedures.index')->with('message','Registro guardado');
    }
}
