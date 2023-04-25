@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-12 col-md-6">
            <h5 class="mb-0">Citas</h5>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-3">
                <form id="formBrand" method="GET" action="{{route('appointment.index')}}">
                    <div class="row">
                        <div class="col-xl-3 col-md-3 mt-4 mt-md-0">
                            <div class="form-group">
                                <label for="from" class="form-label">Estado</label>
                                <select class="form-select form-control" name="status" required>
                                    <option value="">Seleccionar</option>
                                    <option value="1" {{ '1' === request('status') ? 'selected' : '' }}>Sin Atender</option>
                                    <option value="0" {{ '0' === request('status') ? 'selected' : '' }}>Atendida</option>
                                    <option value="2" {{ '2' === request('status') ? 'selected' : '' }}>Cancelada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mt-4 mt-md-0">
                            <div class="form-group">
                                <label for="from" class="form-label">Mes</label>
                                <input type="month" name="month" id="from" class="form-control" value="{{ !request()->has('month') ? now()->startOfWeek()->format('Y-m') : request('month') }}" required/>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mt-4 mt-md-0" style="padding-top: 30px">
                            <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
                        </div>
                    </div>

                </form>

                <br>
                <table class="table table-center" id="dtAppointment" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3">#</th>
                        <th class="border-bottom p-3">Paciente</th>
                        <th class="border-bottom p-3">Fecha | Hora</th>
                        <th class="border-bottom p-3">Cod. Asignación</th>
                        <th class="border-bottom p-3">Médico</th>
                        <th class="border-bottom p-3">Cita</th>
                        <th class="border-bottom p-3 text-center">Pagado</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('service.appointments.partials.row', $appointments,'appointment')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    #dtAppointment_filter {
        float: left !important;
    }
    #dtAppointment_filter input {
        width: 400px;
    }

    #dtAppointment_length {
        float: right !important;
    }

    #dtAppointment_length label {
        display:flex;
        justify-content: center;
        align-items: center;
        padding-top: 22px;
    }
</style>
