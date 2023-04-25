<?php

namespace App\SoftMedic\Service\AppointmentPayments;

use Illuminate\Database\Eloquent\Model;

class AppointmentPayment extends Model
{
    protected $table = 'solicitud_citas_pagos';

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $casts = [
        'fechaPago' => 'date'
    ];
}
