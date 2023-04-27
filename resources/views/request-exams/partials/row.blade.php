<tr>
    <td class="p-3">{{ $requestExam->id }}</td>
    <td class="p-3">{{ $requestExam->patient->full_name }}</td>
    <td class="text-center">{{ \Carbon\Carbon::parse($requestExam->fechaExamen)->format('Y-m-d') }}</td>
    <td class="text-center">{{ $requestExam->idExamen }}</td>
    <td class="text-center">{{ $requestExam->codigo_interno }}</td>
    <td class="text-end">S/{{ number_format($requestExam->precio,2) }}</td>
    <td class="text-center p-3">
        {{ $requestExam->estado }}
    </td>
    <td class="text-center">
        @include('components.is-active',['status' => $requestExam->activo])
    </td>

    <td class="text-end p-3">
        @include('components.delete',['route' => route('solicitud-citas.delete',$requestExam->id)])
    </td>
</tr>
