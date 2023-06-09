<div class="row">
    <div class="col-md-3 mb-3">
        <label class="form-label">Nombre <span class="text-danger">*</span></label>
        @include('components.input-text', ['name' => 'name'])
    </div>

    <div class="col-12">
        <div class="form-check form-switch">
            <input type="hidden" name="status" value="0">
            <input class="form-check-input" type="checkbox" id="statusForm"
                   name="web_is_active"
                   value="1" {{ $model->web_is_active || old('web_is_active', false) === true ? 'checked' : '' }}>
            <label class="form-check-label" for="statusForm">¿Está activo?</label>
        </div>
    </div>
</div>

@include('components.form-actions')
