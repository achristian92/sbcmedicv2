@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Permisos ({{ $permissions->total() }})</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center" width="5%">#</th>
                        <th class="border-bottom p-3">Nombre</th>
                        <th class="border-bottom p-3">Código</th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('setting.permissions.partials.row', $permissions,'permissions')
                    </tbody>
                </table>
                <div class="mt-3 p-3">
                    {!! $permissions->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

