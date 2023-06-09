@extends('layouts.root')
@section('content')
    <div class="container">
        <div class="row gx-0 gy-5">
            <div class="col-12 col-lg-3">
                <div class="bg-primary p-4">
                    <form action="{{ route('root.doctors.index')  }}">
                        <div class="mb-4">
                            <input type="text" class="form-control" name="name" placeholder="Buscar médico..." value="{{ request()->get('name') }}">
                        </div>
                        <div class="mb-4">
                            <select class="form-select" name="specialty_id">
                                <option value="">Especialidad</option>
                                @foreach($specialities as $speciality)
                                    <option
                                        value="{{ $speciality->getIdAttribute() }}" {{ request()->get('specialty_id') == $speciality->getIdAttribute() ? 'selected' : '' }}>{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="mb-4">--}}
{{--                            <select class="form-select">--}}
{{--                                <option selected>Horarios</option>--}}
{{--                                <option value="1"></option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="mb-4">
                            <select class="form-select" name="local_id">
                                <option selected>Sede</option>
                                @foreach($locals as $local)
                                    <option
                                        value="{{ $local->id }}" {{ request()->get('local_id') == $local->id ? 'selected' : '' }}>{{ $local->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-grid">
                            <input type="submit" value="Buscar" class="btn btn-secondary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg px-4">
                <div class="mb-4 text-center text-lg-start">
                    <h1 class="fs-2">Encuentra a tu médico de confianza</h1>
                    <p>Nuestros especialistas están preparados para ayudarte y atenderte con la experiencia de más de 10
                        años.</p>
                </div>

                @if(count($doctors) > 0)
                    <div class="sbc-medics mb-4">
                        @foreach($doctors as $doctor)
                            <div class="card doctor-card">
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
                                        <span class="card-text">RNE: {{ $doctor->rne ? $doctor->rne : '----' }}</span>
                                    </div>
                                    <span class="card-badge"
                                          style="background-color: #ecfff6; color: #36ae73">{{ $doctor->specialty->name }}</span>
                                    <a href="{{ route('root.doctors.show', $doctor) }}" class="stretched-link"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {!! $doctors->links() !!}
                @else
                    <h5 class="text-center py-6">No hay medicos que mostrar</h5>
                @endif
            </div>
        </div>
    </div>
@endsection
