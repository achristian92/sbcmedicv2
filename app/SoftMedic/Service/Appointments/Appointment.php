<?php

namespace App\SoftMedic\Service\Appointments;

use App\SoftMedic\Patients\Patient;
use App\SoftMedic\Service\AppointmentPayments\AppointmentPayment;
use App\SoftMedic\Service\Specialties\Specialty;
use App\SoftMedic\Settings\Doctors\Doctor;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'cita';

    protected $appends = ['id'];

    protected $guarded = ['id'];

    protected $primaryKey = 'idCita';

    public $timestamps = false;

    protected $casts = [
        'fechaCita' => 'date',
    ];

    public function getIdAttribute()
    {
        return $this->idCita;
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Patient::class,'idUsuario','idUsuario');
    }

    public function specialty(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Specialty::class,'idEspecialidad');
    }

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class,'idMedico');
    }
    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AppointmentPayment::class,'idCita');
    }
}
