<?php

namespace App\SoftMedic\Settings\Roles;

use App\SoftMedic\Settings\Permissions\Permission;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

    CONST DOCTOR_TYPE = 2;
    CONST CUSTOMER_TYPE = 3;

    protected $guarded = ['id'];

    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Permission::class,'permiso_rol','idPermiso','idRol');
    }
}
