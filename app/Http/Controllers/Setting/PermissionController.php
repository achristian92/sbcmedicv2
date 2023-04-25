<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\SoftMedic\Settings\Permissions\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('descripcion')->paginate();
        return view('setting.permissions.index',compact('permissions'));
    }
}
