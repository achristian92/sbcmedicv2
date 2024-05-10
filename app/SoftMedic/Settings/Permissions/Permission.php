<?php

namespace App\SoftMedic\Settings\Permissions;

use App\SoftMedic\Settings\Roles\Rol;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permiso';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function rol(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Rol::class,'permiso_rol','idPermiso','idRol');
    }
}
