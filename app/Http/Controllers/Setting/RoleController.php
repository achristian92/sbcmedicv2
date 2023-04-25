<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\SoftMedic\Settings\Roles\Rol;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Rol::with('permissions')->orderBy('descripcion')->paginate();
        return view('setting.roles.index',compact('roles'));
    }

    public function show(Rol $rol)
    {
        dd($rol);
    }
}
