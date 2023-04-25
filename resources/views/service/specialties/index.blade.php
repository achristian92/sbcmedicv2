@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Especialidades</h5>
            <span class="text-muted">
                @if(request('show') === 'all')
                    => <a href="{{ route('service.specialties.index',"show=active") }}" class="text-reset">Ver activos</a>
                @else
                    => <a href="{{ route('service.specialties.index',"show=all") }}" class="text-reset">Ver todos</a>
                @endif
            </span>
        </div>
        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{ route('service.specialties.create') }}" class="btn btn-sm btn-primary">Nuevo</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-3">
                <table class="table table-center" id="dtSpeciality" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center">#</th>
                        <th class="border-bottom p-3">Nombre</th>
                        <th class="border-bottom p-3">Código Sala</th>
                        <th class="border-bottom p-3">Estado</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @each('service.specialties.partials.row', $specialties,'specialty')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    #dtSpeciality_filter {
        float: left !important;
    }
    #dtSpeciality_filter input {
        width: 400px;
    }

    #dtSpeciality_length {
        float: right !important;
    }

    #dtSpeciality_length label {
        display:flex;
        justify-content: center;
        align-items: center;
        padding-top: 22px;
    }
</style>
