<div class="card doctor-card h-100">
    <div class="card-body">
        <div class="card-figure">
            @if ($doctor->web_src_img)
                <img src="{{ $doctor->web_src_img }}" alt="{{ $doctor->getFullNameAttribute() }}"/>
            @else
                @if($doctor->gender === 'M')
                    <img src="{{ asset('assets/images/doctors/01.jpg') }}" alt="">
                @else
                    <img src="{{ asset('assets/images/doctors/03.jpg') }}" alt="">
                @endif
            @endif
        </div>
        <h6 class="card-title">{{ $doctor->title }} {{ $doctor->firstname }} {{ $doctor->lastname }}</h6>
        <div class="card-content">
            <span class="card-text">CMP: {{ $doctor->cmp ? $doctor->cmp : '----' }}</span>
            @if($doctor->web_info_type === 'rne')
                <span class="card-text">RNE: {{ $doctor->rne ? $doctor->rne : '----' }}</span>
            @elseif($doctor->web_info_type === 'cnp')
                <span class="card-text">CNP: {{ $doctor->cnp ? $doctor->cnp : '----' }}</span>
            @elseif($doctor->web_info_type === 'cpp')
                <span class="card-text">CPP: {{ $doctor->cpp ? $doctor->cpp : '----' }}</span>
            @endif
        </div>
        <span class="card-badge"
              style="background-color: #ecfff6; color: #36ae73">{{ $doctor->specialty->name }}</span>
        <a href="{{ route('root.doctors.show', $doctor) }}" class="stretched-link"></a>
    </div>
</div>
