<tr>
    <td class="p-3">{{ ucwords(strtolower($schedule['lastname'])) }}</td>
    <td class="p-3 text-muted">{{ strtoupper($schedule['especialidad']) }}</td>
    <td class="p-3 text-center h6">{{ \Carbon\Carbon::parse($schedule['date'])->format('d/m/Y') }}</td>
    <td class="p-3 text-center">{{ $schedule['horaMinimo'] }}</td>
    <td class="p-3 text-center">{{ $schedule['horaMaxima'] }}</td>
    <td class="p-3">
        {{  $schedule['turno'] }}
    </td>
    <td> {{  $schedule['tipo'] }}</td>
    <td class="text-end p-3">
        @include('components.delete',['route' => route('setting.schedules.delete',[$schedule['idDoctor'],$schedule['date']])])
    </td>

</tr>
