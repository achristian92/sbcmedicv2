<?php

namespace App\Http\Controllers\Landing;

use \App\Http\Controllers\Controller;
use App\SoftMedic\General\Locals\Local;
use App\SoftMedic\General\Locals\Requests\LocalRequest;

class LocalController extends Controller
{
    public function index()
    {
        $locals = Local::all();

        return view('landing.locals.index', [
            'locals' => $locals
        ]);
    }

    public function create()
    {
        return view('landing.locals.create', [
            'model' => new Local()
        ]);
    }

    public function store(LocalRequest $request)
    {
        Local::create($request->validated());

        return redirect()->route('landing.l-locals.index')->with('message', 'Registro guardado');
    }

    public function edit(Local $lLocal)
    {
        return view('landing.locals.edit', [
            'model' => $lLocal,
        ]);
    }

    public function update(LocalRequest $request, Local $lLocal)
    {
        $data = $request->validated();
        $lLocal->update($data);

        return redirect()->route('landing.l-locals.index')->with('message', 'Registro actualizado');
    }
}
