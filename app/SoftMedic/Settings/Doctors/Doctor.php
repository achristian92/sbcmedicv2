<?php

namespace App\SoftMedic\Settings\Doctors;

use App\Models\User;
use App\SoftMedic\Service\Specialties\Specialty;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $primaryKey = 'idDoctor';

    protected $appends = ['id','full_name'];

    protected $guarded = ['idDoctor'];

    protected $casts = [
        'birthdate'=> 'date'
    ];
    public function getIdAttribute()
    {
        return $this->idDoctor;
    }

    public function getFullNameAttribute()
    {
        return ucfirst(strtolower($this->title)).' '.ucwords(strtolower($this->firstname)).' '.ucwords(strtolower($this->lastname));
    }

    public function specialty(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Specialty::class,'idSpecialty')->withDefault([
            'name' => '--'
        ]);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class,'idUsuario');
    }
}
