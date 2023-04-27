<tr>
    <td class="p-3 text-center">{{ $doctor->id }}</td>
    <td class="p-3">
        <a href="#" class="text-dark">
            <div class="d-flex align-items-center">
                @if($doctor->gender === 'M')
                    <img src="{{ asset('assets/images/doctors/01.jpg') }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                @else
                    <img src="{{ asset('assets/images/doctors/03.jpg') }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                @endif
                <span class="ms-2">{{ $doctor->full_name }}</span>
            </div>
        </a>
    </td>
    <td class="p-3">{{ $doctor->nro_document }}</td>
    <td class="p-3">
        @if($doctor->cmp)
            <small class="text-muted ms-2">cmp: {{ $doctor->cmp }}</small>
        @endif
        @if($doctor->rne)
            <small class="text-muted ms-2">rne: {{ $doctor->rne }}</small>
        @endif
        @if($doctor->cnp)
            <small class="text-muted ms-2">cnp: {{ $doctor->cnp }}</small>
        @endif
        @if($doctor->cpp)
            <small class="text-muted ms-2">cpp: {{ $doctor->cpp }}</small>
        @endif
    </td>
    <td class="p-3">{{ $doctor->specialty->name }}</td>
    <td class="p-3">{{ $doctor->codigoSala }}</td>
    <td>@include('components.is-active',['status' => $doctor->status])</td>
    <td class="text-end p-3">
        @include('components.edit',['route' => route('setting.doctors.edit',$doctor)])
    </td>
</tr>
