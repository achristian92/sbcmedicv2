<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Nombre <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'descripcion'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Presentacion  <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'presentacion'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Código Susi <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'cod_susi'])
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Costo </label>
            @include('components.input-number',['name' => 'costo_unitario'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Precio</label>
            @include('components.input-number',['name' => 'precio_compra'])
        </div>
    </div>

</div>

@if($model->id)
    <div class="form-check form-switch">
        <input type="hidden" name="activo" value="0">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
               name="activo"
               value="1" {{ $model->activo || old('activo',0) === 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="flexSwitchCheckDefault">¿Está activo?</label>
    </div>
@endif

@include('components.form-actions')

