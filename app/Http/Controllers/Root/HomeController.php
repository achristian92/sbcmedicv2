<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $specialties = Specialty::where('web_is_active', true)->orderBy('name')->get();
        $doctors = Doctor::with('specialty')
            ->whereNotNull('idSpecialty')
            ->where('web_is_active', true)
            ->limit(8)
            ->get();

        return view('root.home.index', [
            'doctors' => $doctors,
            'specialties' => $specialties
        ]);
    }

    public function contact(Request $request)
    {
        Mail::to('abelurussan@gmail.com')->send(new Contact(
            $request->name,
            $request->telephone,
            $request->document,
            $request->specialty,
            $request->message)
        );

        return redirect()->route('root.home.index')->with('message', 'En breve uno de nuestros especialistas se pondran en contacto.');
    }
}
