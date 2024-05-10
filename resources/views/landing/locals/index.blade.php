@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')

    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Sedes</h5>
        </div>
        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{ route('landing.l-locals.create') }}" class="btn btn-sm btn-primary">Nuevo</a>
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
                        <th class="border-bottom p-3">Estado</th>
                        <th class="border-bottom p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('landing.locals.partials.row', $locals, 'local')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
