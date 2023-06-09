<?php

namespace App\SoftMedic\General\Locals;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locals';

    protected $guarded = ['id'];

    public static function getListActives()
    {
        return Local::where('web_is_active', 1)->orderBy('name')->get();
    }
}
