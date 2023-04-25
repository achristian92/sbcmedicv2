<tr>
    <td class="text-center">{{ $specialty->idSpecialty }}</td>
    <td>{{ $specialty->name }}</td>
    <td>{{ $specialty->codigoSala }}</td>
    <td>@include('components.is-active',['status' => $specialty->status])</td>
    <td class="text-end p-3">
        @include('components.edit',['route' => route('service.specialties.edit',$specialty)])
    </td>
</tr>
