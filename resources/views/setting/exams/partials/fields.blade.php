<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Nombre <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'nombre'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Tipo  <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'tipo'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Código <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'codigo'])
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Precio </label>
            @include('components.input-number',['name' => 'precio'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Valor referencial</label>
            @include('components.input-text',['name' => 'valor_referencial'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Unidades</label>
            @include('components.input-text',['name' => 'unidades'])
        </div>
    </div>

</div>

@includeWhen($model->id,'components.is-active-check')

@if($model->id)
    <div class="form-check form-switch">
        <input type="hidden" name="nuevo" value="0">
        <input class="form-check-input" type="checkbox" id="new"
               name="nuevo"
               value="1" {{ $model->nuevo || old('nuevo',0) === 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="new">¿Nuevo?</label>
    </div>
@endif

@include('components.form-actions')

