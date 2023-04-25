@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Horarios</h5>
        </div>
        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3" width="20%">Profesional</th>
                        <th class="border-bottom p-3" width="15%">Especialidad</th>
                        <th class="border-bottom p-3 text-center" width="10%">Fecha</th>
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
                <div class="mt-3 p-3">
{{--                    {!! $schedules->links() !!}--}}
                </div>
            </div>
        </div>
    </div>
@endsection

