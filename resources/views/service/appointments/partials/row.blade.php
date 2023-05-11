<tr>
    <td class="p-3">{{ $appointment->id }}</td>
    <td class="p-3">
        {{ $appointment->patient->full_name }} <br>
        <span class="text-muted">Nro. Documento: {{ $appointment->patient->document }}</span>
    </td>
    <td class="p-3" data-order="{{ $appointment->fechaCita }}">{{ $appointment->fechaCita->format('d/m/Y') }} | {{ $appointment->horaCita }} </td>
    <td class="p-3">{{ $appointment->codigo_asignacion }}</td>
    <td class="p-3">
        {{ $appointment->doctor->full_name }}<br>
        <span class="text-muted">Especialidad: {{ $appointment->specialty->name }}</span>
    </td>
    <td class="p-3">
        @if($appointment->status == '0')
            <span class="badge bg-soft-success">Atendida</span>
        @elseif($appointment->status == '1')
            <span class="badge bg-soft-warning">Sin Atender</span>
        @else
            <span class="badge bg-soft-danger">Cancelada</span>
        @endif
    </td>
    <td class="text-center p-3">
        @if($appointment->payments->count() > 0 && $appointment->payments->count() === $appointment->payments->where('pago','1')->count())
            <span class="badge bg-soft-success">Si</span>
        @else
            <span class="badge bg-soft-danger">No</span>
        @endif
    </td>
    <td class="text-end p-3">
        @if($appointment->status != '0')
            @if($appointment->payments->count() > 0 && $appointment->payments->count() === $appointment->payments->where('pago','1')->count())
                <a href="{{ route('appointment.add-remove',$appointment) }}" class="btn btn-icon btn-pills btn-soft-danger ms-2"><i class="uil uil-money-bill-slash"></i></a>
            @else
                <a href="{{ route('appointment.add-payment',$appointment) }}" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-money-bill"></i></a>
            @endif
        @endif
    </td>
</tr>
