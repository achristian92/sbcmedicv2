@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Exámenes</h5>
        </div>
        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{ route('setting.exams.create') }}" class="btn btn-sm btn-primary">Nuevo</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-3">
                <table class="table table-center" id="dtLaboratory" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center">#</th>
                        <th class="border-bottom p-3">Nombre</th>
                        <th class="border-bottom p-3">Tipo</th>
                        <th class="border-bottom p-3">Precio</th>
                        <th class="border-bottom p-3">Valor referencial</th>
                        <th class="border-bottom p-3">Unidad</th>
                        <th class="border-bottom p-3 text-center">Estado</th>
                        <th class="border-bottom p-3 text-center">Nuevo</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @each('setting.exams.partials.row', $exams,'exam')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    #dtLaboratory_filter {
        float: left !important;
    }
    #dtLaboratory_filter input {
        width: 400px;
    }

    #dtLaboratory_length {
        float: right !important;
    }

    #dtLaboratory_length label {
        display:flex;
        justify-content: center;
        align-items: center;
        padding-top: 22px;
    }
</style>
