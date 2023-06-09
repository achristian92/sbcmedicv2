@extends('layouts.root')
@section('content')
    <div class="container-xl">
        <div class="row gx-4 gy-5">
            <div class="col-12 col-sm-4 col-xl-3">
                <div class="sbc-medic-figure mb-4">
{{--                    <img src="{{ asset('landing_assets/images/ALFARO 4.jpg') }}" alt="">--}}
                    <img src="{{ $doctor->web_src_img }}" alt="{{ $doctor->getFullNameAttribute() }}"/>
                </div>

                <div class="sbc-medic-info">
                    <h1 class="fs-2 mb-3">{{ $doctor->getFullNameAttribute() }}</h1>

                    <div class="sbc-medic-info-item">
                        <span class="sbc-medic-info-title">Especialidad</span>
                        <span class="sbc-medic-info-text">{{ $doctor->specialty->name }}</span>
                    </div>

                    <div class="sbc-medic-info-item">
                        <span class="sbc-medic-info-title">Horarios</span>
                        <span class="sbc-medic-info-text">Lunes - Viernes <br> 7 a.m. - 9 p.m.</span>
                        <span class="sbc-medic-info-text">Sábados - Domingos
                             <br> 7 a.m. - 9 p.m.</span>
                    </div>

                    @if($doctor->local)
                        <div class="sbc-medic-info-item">
                            <span class="sbc-medic-info-title">Sede</span>
                            <span class="sbc-medic-info-text">{{ $doctor->local->name }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fs-2 lh-1 m-0">Sobre mí</h1>
                    <a href="https://wa.me/51919446233" target="_blank" class="btn btn-primary">¡Agenda tu cita hoy
                        mismo!</a>
                </div>

                <div class="sbc-content">
                    {!! $doctor->web_description !!}
                </div>
            </div>
        </div>
    </div>
@endsection
