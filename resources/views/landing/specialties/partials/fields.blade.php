<div class="row">
    <div class="col-md-4 mb-3">
        <div class="d-flex align-items-end gap-3">
            <div class="flex-grow-1">
                <label class="form-label d-flex gap-1 align-items-center" for="attachment_icon">
                    Icono
                    <small style="font-size: 12px; color: rgba(0, 0, 0, 0.35)">(110x110)</small>
                </label>
                <input type="file" class="form-control" name="attachment_icon" id="attachment_icon">
            </div>
            @if ($model->web_src_icon)
                <img src="{{ $model->web_src_icon }}" alt="{{ $model->name . '-icon' }}"
                     class="avatar avatar-md-sm border shadow"/>
            @endif
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="d-flex align-items-end gap-3">
            <div class="flex-grow-1">
                <label class="form-label d-flex gap-1 align-items-center" for="attachment_img">
                    Imagen
                    <small style="font-size: 12px; color: rgba(0, 0, 0, 0.35)">(490x250)</small>
                </label>
                <input type="file" class="form-control" name="attachment_img" id="attachment_img">
            </div>
            @if ($model->web_src_img)
                <img src="{{ $model->web_src_img }}" alt="{{ $model->name . '-img' }}"
                     class="avatar avatar-md-sm border shadow" style="object-fit: contain"/>
            @endif
        </div>
    </div>
</div>

<div class="row">

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
