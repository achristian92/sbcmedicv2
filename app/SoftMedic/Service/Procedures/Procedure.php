<?php

namespace App\SoftMedic\Service\Procedures;

use App\SoftMedic\General\ReasonAppointments\ReasonAppointment;
use App\SoftMedic\Service\Specialties\Specialty;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $table = 'procedimientos';

    protected $guarded = ['id'];


    public function specialty(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Specialty::class,'idEspecialidad')->withDefault([
            'name' => '--'
        ]);
    }

    public function reasonappointment()
    {
        return $this->belongsTo(ReasonAppointment::class,'idMotivoCita')->withDefault([
            'descripcion' => '--'
        ]);
    }
}
