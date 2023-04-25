<tr>
    <td class="text-center">{{ $rol->id }}</td>
    <td>{{ $rol->descripcion }}</td>
    <td>{{ $rol->permissions->count() }}</td>
    <td class="text-end p3">
        @include('components.show',['route' => route('setting.roles.show',$rol)])
    </td>
</tr>
