<tr>
    <td class="text-center">{{ $procedure->id }}</td>
    <td>
        {{ ucwords(strtolower($procedure->descripcion)) }}<br>
        <span class="text-muted">
            <small class="ms-1">código: {{ $procedure->codigo_interno }}</small>
            <small class="ms-1">| tipo: {{ ucwords(strtolower($procedure->tipo)) }}</small>
        </span>
    </td>
    <td>
        <ul class="list-unstyled mt-2 mb-0">
            <li class="d-flex">
                <i class="uil uil-ticket text-primary align-middle"></i>
                <small class="text-muted ms-2">{{ $procedure->reasonappointment->descripcion }}</small>
            </li>
            <li class="d-flex mt-2">
                <i class="ri-time-line text-primary align-middle"></i>
                <small class="text-muted ms-2">{{ round($procedure->tiempo) }} minutos</small>
            </li>
            <li class="d-flex mt-2">
                <i class="uil uil-money-bill text-primary align-middle"></i>
                <small class="text-muted ms-2">S/{{ number_format($procedure->precio,2) }}</small>
            </li>
        </ul>
    </td>
    <td>{{ $procedure->specialty->name }}</td>
    <td>@include('components.is-active',['status' => $procedure->status])</td>
    <td class="text-end p-3">
        @include('components.edit',['route' => route('service.procedures.edit',$procedure)])
    </td>
</tr>
