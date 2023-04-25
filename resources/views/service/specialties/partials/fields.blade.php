<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Nombre <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'name'])
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Código de sala </label>
            @include('components.input-text',['name' => 'codigoSala'])
        </div>
    </div>
</div>
@includeWhen($model->idSpecialty,'components.is-active-check')


@include('components.form-actions')
