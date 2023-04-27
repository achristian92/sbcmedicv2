<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SoftMedic\RequestExams\RequestExam;
use App\SoftMedic\Settings\Exams\Exam;

class SolicitudCitaController extends Controller
{
    public function index()
    {
        $requestExams = [];

        if(request()->filled('codigo_interno'))
            $requestExams = RequestExam::with('patient')->where('codigo_interno','LIKE',request('codigo_interno'))->get();

        if(request()->filled('idExamen'))
            $requestExams =$requestExams->where('idExamen',request('idExamen'));

        return view('request-exams.index',[
            'requestExams' => $requestExams,
            'exams' => Exam::orderBy('id')->get()
        ]);
    }

    public function delete($id)
    {
        RequestExam::find($id)->delete();

        return back();
    }
}
