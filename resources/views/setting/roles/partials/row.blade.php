<tr>
    <td class="text-center">{{ $rol->id }}</td>
    <td>{{ $rol->descripcion }}</td>
    <td class="text-center">{{ $rol->permission->count() }}</td>
    <td class="text-center">{{ $rol->userS->count() }}</td>
    <td class="text-end p3">
{{--        @include('components.show',['route' => route('setting.roles.show',$rol)])--}}
        @include('components.edit',['route' => route('setting.roles.edit',$rol)])
        @include('components.delete',['route' => route('setting.roles.delete',$rol)])
    </td>
</tr>
