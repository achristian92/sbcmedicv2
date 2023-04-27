@extends('layouts.app')
@section('content')
    @include('components.errors-and-messages')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Recetas</h5>
        </div>
        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalUploadfile" class="btn btn-sm btn-secondary m-1"> Subir archivo</a>
            <a href="{{ route('service.recipes.create') }}" class="btn btn-sm btn-primary">Nuevo</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded p-3">
                <table class="table table-center" id="dtRecipe" width="100%">
                    <thead>
                    <tr>
                        <th class="border-bottom p-3 text-center" width="8%">#</th>
                        <th class="border-bottom p-3">Nombre</th>
                        <th class="border-bottom p-3">Presentación</th>
                        <th class="border-bottom p-3 text-center">Costo</th>
                        <th class="border-bottom p-3 text-center">Precio</th>
                        <th class="border-bottom p-3 text-center" width="10%">Cod. Sussi</th>
                        <th class="border-bottom p-3 text-center" width="10%">Estado</th>
                        <th class="border-bottom p-3" width="5%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @each('service.recipes.partials.row', $recipes,'recipe')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalUploadfile" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="LoginForm-title">Subir recetas</h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <form method="POST" action="{{ route('service.recipes.import') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="p-3 rounded box-shadow">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Subir excel de recetas</label>
                                <input class="form-control" type="file" id="formFile" name="file_upload">
                            </div>
                            <br>
                            <div class="mb-3">

                                <a href="{{ asset('files/plantilla_recetas.xlsx') }}" class="btn btn-sm btn-link m-1">
                                    <i class="uil uil-download-alt me-1"></i>
                                    Descargar plantilla
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Subir</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

<style>
    #dtRecipe_filter {
        float: left !important;
    }
    #dtRecipe_filter input {
        width: 400px;
    }

    #dtRecipe_length {
        float: right !important;
    }

    #dtRecipe_length label {
        display:flex;
        justify-content: center;
        align-items: center;
        padding-top: 22px;
    }
</style>
