@extends('layouts.root')
@section('content')
    <div class="container-xl">
        <div class="row gx-4 gy-5">
            <div class="col-12 col-md-4 col-xl-3">
                <div class="sbc-medic-figure mb-4">
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
            </div>
            <div class="col">
                <div class="row gy-2 mb-4">
                    <div class="col-12 col-sm">
                        <h1 class="fs-2 lh-1 m-0 text-center text-sm-start">{{ $doctor->getFullNameAttribute() }}</h1>
                        <div class="d-flex gap-4 justify-content-center justify-content-sm-start">
                            <span><b>CMP:</b> {{ $doctor->cmp ? $doctor->cmp : '----' }}</span>
                            <span><b>RNE:</b> {{ $doctor->rne ? $doctor->rne : '----' }}</span>
                        </div>
                    </div>

                    <div class="col-12 col-sm-auto flex-grow-0 text-center">
                        <a href="https://wa.me/51919446233" target="_blank" class="btn btn-primary">¡Agenda tu cita hoy
                            mismo!</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="fw-bold">Especialidad</h5>
                            <p>{{ $doctor->specialty->name }}</p>
                        </div>

                        <div>
                            <h5 class="fw-bold">Formación academica</h5>
                            {!! $doctor->web_info !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="fw-bold">Servicios</h5>
                            {!! $doctor->web_services !!}
                        </div>

                        @if($doctor->local)
                            <div class="mb-3">
                                <h5 class="fw-bold">Sede</h5>
                                <p>{{ $doctor->local->name }}</p>
                            </div>
                        @endif

                        <div class="mb-3">
                            <h5 class="fw-bold">Horarios</h5>
                            <p class="sbc-medic-info-text">Lunes - Viernes <br> 7 a.m. - 9 p.m.</p>
                            <p class="sbc-medic-info-text">Sábados - Domingos <br> 7 a.m. - 9 p.m.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
