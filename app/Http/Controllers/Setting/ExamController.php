<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\SoftMedic\Settings\Exams\Exam;
use App\SoftMedic\Settings\Exams\Requests\ExamRequest;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();

        return view('setting.exams.index',compact('exams'));
    }

    public function create()
    {
        return view('setting.exams.create',[
            'model' =>  new Exam(),
        ]);
    }

    public function store(ExamRequest $request)
    {
        Exam::create($request->validated());

        return redirect()->route('setting.exams.index')->with('message','Registro guardado');
    }

    public function edit(Exam $exam)
    {
        return view('setting.exams.edit',[
            'model' => $exam,
        ]);
    }

    public function update(ExamRequest $request, Exam $exam)
    {
        $exam->update($request->validated());

        return redirect()->route('setting.exams.index')->with('message','Registro guardado');
    }
}
