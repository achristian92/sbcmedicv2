<tr>
    <td class="p-3 text-center">{{ $specialty->getIdAttribute() }}</td>
    <td class="p-3">
        <span class="ms-2">{{ $specialty->name }}</span>
    </td>
    <td class="p-3">
        @if($specialty->web_src_icon)
            <img src="{{ asset($specialty->web_src_icon) }}" alt="" style="height: 50px; width: 50px; display: block">
        @endif
    </td>
    <td>@include('components.is-active', ['status' => $specialty->web_is_active])</td>
    <td class="text-end p-3">
        @include('components.edit',['route' => route('landing.especialidades.edit', $specialty)])
    </td>
</tr>
