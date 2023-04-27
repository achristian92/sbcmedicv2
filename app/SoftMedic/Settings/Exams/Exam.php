<?php

namespace App\SoftMedic\Settings\Exams;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'examen';

    protected $guarded = ['id'];

    public $timestamps = false;
}
