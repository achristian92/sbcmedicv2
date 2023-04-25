@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Procedimientos ({{ $procedures->total() }})</h5>
            <span class="text-muted">
                @if(request('show') === 'all')
                    => <a href="{{ route('service.procedures.index',"show=active") }}" class="text-reset">Ver activos</a>
                @else
                    => <a href="{{ route('service.procedures.index',"show=all") }}" class="text-reset">Ver todos</a>
                @endif
            </span>
        </div>
        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{ route('service.procedures.create') }}" class="btn btn-sm btn-primary">Nuevo</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center" width="5%">#</th>
                        <th class="border-bottom p-3" width="40%">Nombre</th>
                        <th class="border-bottom p-3">Tiempo | Precio</th>
                        <th class="border-bottom p-3">Especialidad</th>
                        <th class="border-bottom p-3">Estado</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('service.procedures.partials.row', $procedures,'procedure')
                    </tbody>
                </table>
                <div class="mt-3 p-3">
                    {!! $procedures->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

