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
                <form id="formBrand" method="GET" action="{{route('solicitud-citas.index')}}">
                    <div class="row">
                        <div class="col-xl-3 col-md-3 mt-4 mt-md-0">
                            <div class="form-group">
                                <label for="from" class="form-label">Exámen</label>
                                <select class="form-select form-control" name="idExamen">
                                    <option value="">Seleccionar</option>
                                    @foreach($exams as $exam)
                                        <option value="{{ $exam->id }}" {{ $exam->id == request('idExamen') ? 'selected' : '' }} >[{{ $exam->id }}] {{ $exam->nombre }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mt-4 mt-md-0">
                            <div class="form-group">
                                <label for="codigo_interno" class="form-label">Código interno</label>
                                <input type="text" name="codigo_interno" id="codigo_interno" class="form-control" value="{{ request('codigo_interno') }}"/>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mt-4 mt-md-0" style="padding-top: 30px">
                            <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
                        </div>
                    </div>

                </form>

                <br>
                <table class="table table-center" id="dtAppointment2" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3">#</th>
                        <th class="border-bottom p-3">Usuario</th>
                        <th class="border-bottom p-3 text-center">F. Exámen</th>
                        <th class="border-bottom p-3 text-center">Código exámen</th>
                        <th class="border-bottom p-3 text-center">Código interno</th>
                        <th class="border-bottom p-3 text-center">Precio</th>
                        <th class="border-bottom p-3 text-center">Estado1</th>
                        <th class="border-bottom p-3 text-center">Estado2</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('request-exams.partials.row', $requestExams,'requestExam')
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
