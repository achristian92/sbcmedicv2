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
                <table class="table table-center" id="example" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3">#</th>
                        <th class="border-bottom p-3">Paciente</th>
                        <th class="border-bottom p-3">Fecha | Hora</th>
                        <th class="border-bottom p-3">Especialidad</th>
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
{{--                <div class="mt-3 p-3">--}}
{{--                    {!! $appointments->links() !!}--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
<style>
    table.dataTable tbody th, table.dataTable tbody td {
        height: 32px;
        padding: 1px 1px;
        font-size: 12px
    }
    table tbody th, table tbody td {
        height: 35px;
        padding: 1px 1px;
        font-size: 12px
    }

    table.dataTable tfoot th, table.dataTable tfoot td {
        height: 35px;
        padding: 1px 1px;
        font-size: 12px;
        border-top: 0.5px solid #111;
    }

    #example_filter {
        float: left !important;
    }
    #example_filter input {
        width: 400px;
    }

    #example_length {
        float: right !important;
    }
    #example_length label {
        display:flex;
        justify-content: center;
        align-items: center;
    }
</style>
@push('js')
    <script>


        $(document).ready(function () {
            $('#example').DataTable({
                "order": [0,'desc'],
                "dom": '<"top"fl>rt<"bottom"ip>',
            });
        });
    </script>

@endpush

