<div class="row">
    <div class="col-md-5 mb-3">
        <label class="form-label" for="attachment_icon">Icono <span class="text-danger">*</span></label>
        <input type="file" class="form-control" name="attachment_icon" id="attachment_icon">
    </div>

    <div class="col-md-5 mb-3">
        <label class="form-label" for="attachment_img">Imagen <span class="text-danger">*</span></label>
        <input type="file" class="form-control" name="attachment_img" id="attachment_img">
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Descripción <span class="text-danger">*</span></label>
        <textarea id="editor" name="web_description">{{ $model->web_description }}</textarea>
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
