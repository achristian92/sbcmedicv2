<?php

namespace App\SoftMedic\Settings\Schedules;

use App\SoftMedic\Settings\Doctors\Doctor;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'availabilities';

    protected $appends = ['id','full_name'];

    protected $primaryKey = 'idAvailability';

    protected $guarded = ['idAvailability'];

    protected $casts = [
        'date'=> 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function getIdAttribute()
    {
        return $this->idAvailability;
    }

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class,'idDoctor');
    }
}
