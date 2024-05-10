<?php

namespace App\SoftMedic\Patients;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primaryKey = 'idPatient';

    protected $appends = ['full_name'];

    protected $guarded = ['idPatient'];

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class,'idUsuario','idUser');
    }

    public function getFullNameAttribute()
    {
        return ucwords(strtolower($this->firstname)).' '.ucwords(strtolower($this->lastname));
    }
}
