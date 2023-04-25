<?php

namespace App\SoftMedic\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primaryKey = 'idPatient';

    protected $appends = ['full_name'];

    protected $guarded = ['idPatient'];

    public function getFullNameAttribute()
    {
        return ucwords(strtolower($this->firstname)).' '.ucwords(strtolower($this->lastname));
    }
}
