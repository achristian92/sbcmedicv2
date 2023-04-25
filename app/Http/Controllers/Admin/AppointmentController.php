<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Service\Appointments\Appointment;
use App\SoftMedic\Settings\Roles\Rol;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('patient','specialty','doctor','payments')
            ->where('fechaCita','>=',now()->startOfMonth())
            ->orderBy('fechaCita','desc')
            ->get();

        return view('service.appointments.index',[
            'appointments' => $appointments,
        ]);
    }

    public function addPayment(Appointment $appointment)
    {
        $appointment->payments()->update(['pago' => 1,'idUsuarioPago' => Auth::id(),'fechaPago'=> now()]);

        return redirect()->route('appointment.index')->with('message','Pago agregado');
    }

    public function addRemove(Appointment $appointment)
    {
        $appointment->payments()->update(['pago' => 0,'idUsuarioPago' => NULL,'fechaPago'=> NULL]);

        return redirect()->route('appointment.index')->with('message','Pago removido');
    }
}
