<?php

namespace App\SoftMedic\General\ReasonAppointments;

use App\SoftMedic\Service\Specialties\Specialty;
use Illuminate\Database\Eloquent\Model;

class ReasonAppointment extends Model
{
    protected $table = 'catalogo_motivocita';

    public static function getListActives()
    {
        return ReasonAppointment::where('activo',1)->orderBy('descripcion')->get();
    }


}
