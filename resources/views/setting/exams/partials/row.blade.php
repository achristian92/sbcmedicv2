<tr>
    <td class="p-3 text-center">{{ $exam->id }}</td>
    <td class="p-3">
        {{ $exam->nombre }}<br>
        <span class="text-muted">{{ $exam->codigo }}</span>
    </td>
    <td class="p-3">{{ $exam->tipo }}</td>
    <td class="p-3 text-end">
        {{ number_format($exam->precio,2) }}
    </td>
    <td class="p-3 text-end">{{ $exam->valor_referencial }}</td>
    <td class="p-3 text-end">{{ $exam->unidades }}</td>
    <td class="text-center">@include('components.is-active',['status' => $exam->status])</td>
    <td class="text-center">
        @if($exam->nuevo)
            <span class="badge bg-soft-success">Si</span>
        @else
            <span class="badge bg-soft-danger">No</span>
        @endif
    </td>
    <td class="text-end p-3">
        @include('components.edit',['route' => route('setting.exams.edit',$exam)])
    </td>
</tr>
