<?php

namespace App\SoftMedic\Service\Specialties;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'specialties';

    protected $primaryKey = 'idSpecialty';

    protected $appends = ['id'];

    protected $guarded = ['idSpecialty'];

    public function getIdAttribute()
    {
        return $this->idSpecialty;
    }

    public static function getListActives()
    {
        return Specialty::where('status',1)->orderBy('name')->get();
    }
}
