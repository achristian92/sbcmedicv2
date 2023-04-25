<?php

namespace App\SoftMedic\Settings\Permissions;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permiso';

    protected $guarded = ['id'];
}
