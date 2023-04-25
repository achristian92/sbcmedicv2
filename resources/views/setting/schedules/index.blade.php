@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Horarios</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-3">
                <table class="table table-center" id="dtSchedule" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center" width="10%">Fecha</th>
                        <th class="border-bottom p-3" width="20%">Profesional</th>
                        <th class="border-bottom p-3" width="15%">Especialidad</th>
                        <th class="border-bottom p-3 text-center" width="10%">Hora Inicial</th>
                        <th class="border-bottom p-3 text-center" width="10%">Hora Final</th>
                        <th class="border-bottom p-3" width="10%">Turno</th>
                        <th class="border-bottom p-3" width="10%">Tipo</th>
                        <th class="border-bottom p-3" width="5%"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @each('setting.schedules.partials.row', $schedules,'schedule')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    #dtSchedule_filter {
        float: left !important;
    }
    #dtSchedule_filter input {
        width: 400px;
    }

    #dtSchedule_length {
        float: right !important;
    }

    #dtSchedule_length label {
        display:flex;
        justify-content: center;
        align-items: center;
        padding-top: 22px;
    }
</style>

