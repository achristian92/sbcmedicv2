@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')

    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Doctores</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-3">
                <table class="table table-center" id="dtDoctor" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center">#</th>
                        <th class="border-bottom p-3">Nombre</th>
                        <th class="border-bottom p-3">Nro. documento</th>
                        <th class="border-bottom p-3">Datos</th>
                        <th class="border-bottom p-3">Especialidad</th>
                        <th class="border-bottom p-3">Local</th>
                        <th class="border-bottom p-3">Estado</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('landing.doctors.partials.row', $doctors, 'doctor')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

