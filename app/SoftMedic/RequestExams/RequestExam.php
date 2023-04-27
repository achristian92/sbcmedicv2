<?php

namespace App\SoftMedic\RequestExams;

use App\SoftMedic\Patients\Patient;
use Illuminate\Database\Eloquent\Model;

class RequestExam extends Model
{
    protected $table = 'solicitarexamen';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Patient::class,'idUsuario','idUsuario');
    }
}
