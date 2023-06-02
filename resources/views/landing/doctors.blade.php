@extends('layouts.root')
@section('content')
    <div class="container">
        <div class="row gx-0 gy-5">
            <div class="col-12 col-lg-3">
                <div class="bg-primary p-4">
                    <form action="GET" action="#">
                        <div class="mb-4">
                            <input type="text" class="form-control" id="name" placeholder="Buscar médico...">
                        </div>
                        <div class="mb-4">
                            <select class="form-select">
                                <option selected>Especialidad</option>
                                <option value="1"></option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <select class="form-select">
                                <option selected>Horarios</option>
                                <option value="1"></option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <select class="form-select">
                                <option selected>Sede</option>
                                <option value="1"></option>
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

                <div class="sbc-medics mb-4">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="card doctor-card">
                            <div class="card-body">
                                <div class="card-figure" style="background-color: #024963">
                                    <img src="{{ asset('landing_assets/images/doctor.png') }}" alt=""/>
                                </div>
                                <h6 class="card-title">Dr. Cesar Alfaro</h6>
                                <div class="card-content">
                                    <span class="card-text">CMP: 67655</span>
                                    <span class="card-text">RNE: A07018</span>
                                </div>
                                <span class="card-badge"
                                      style="background-color: #ecfff6; color: #36ae73">Medicina general</span>
                            </div>
                        </div>
                    @endfor
                </div>

                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center justify-content-lg-end">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
