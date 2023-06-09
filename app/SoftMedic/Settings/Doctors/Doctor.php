<?php

namespace App\SoftMedic\Settings\Doctors;

use App\Models\User;
use App\SoftMedic\General\Locals\Local;
use App\SoftMedic\Service\Specialties\Specialty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{

    protected $primaryKey = 'idDoctor';

    protected $appends = ['id', 'full_name'];

    protected $guarded = ['idDoctor'];

    protected $casts = [
        'birthdate' => 'date'
    ];

    public function getIdAttribute()
    {
        return $this->idDoctor;
    }

    public function getFullNameAttribute()
    {
        return ucfirst(strtolower($this->title)) . ' ' . ucwords(strtolower($this->firstname)) . ' ' . ucwords(strtolower($this->lastname));
    }

    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class, 'idSpecialty')->withDefault([
            'name' => '--'
        ]);
    }

    public function local(): BelongsTo
    {
        return $this->belongsTo(Local::class, 'local_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'idUsuario');
    }
}
