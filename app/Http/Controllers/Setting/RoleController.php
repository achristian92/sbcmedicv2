<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\SoftMedic\Settings\Permissions\Permission;
use App\SoftMedic\Settings\Roles\Requests\RolRequest;
use App\SoftMedic\Settings\Roles\Rol;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Rol::with('permission','users')->orderBy('descripcion')->paginate();

        return view('setting.roles.index',compact('roles'));
    }

    public function create()
    {
        $model = new Rol();

        return view('setting.roles.create',[
            'model' => $model,
            'permissions' => Permission::orderBy('descripcion')->get()
        ]);
    }

    public function store(RolRequest $request)
    {
        $rol = Rol::create($request->except('permissions'));

        if ($request->has('permissions'))
            $rol->permission()->sync($request->input('permissions'));

        return redirect()->route('setting.roles.index')->with('message','Registro guardado');
    }

    public function show(Rol $role)
    {

    }

    public function edit(Rol $role)
    {
        return view('setting.roles.edit',[
            'model' => $role,
            'permissions' => Permission::orderBy('descripcion')->get()
        ]);
    }

    public function update(RolRequest $request, Rol $role)
    {
        $role->update($request->except('permissions'));

        $request->has('permissions') ? $role->permission()->sync($request->input('permissions')) : $role->permission()->detach();

        return redirect()->route('setting.roles.index')->with('message','Registro actualizado');
    }

    public function delete(Rol $role)
    {
        if($role->users()->exists())
            return back()->with('error','Tienes usuarios usando este registro');

        DB::table('permiso_rol')->where('idRol',$role->id)->delete();
        $role->delete();

        return redirect()->route('setting.roles.index')->with('message','Registro eliminado');
    }
}
