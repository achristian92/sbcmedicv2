<div class="row">
    <div class="col-md-4 mb-3">
        <label class="form-label" for="attachment_img">Imagen <span class="text-danger">*</span></label>
        <input type="file" class="form-control" name="attachment_img" id="attachment_img">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label" for="local_id">Sede <span class="text-danger">*</span></label>
        <select name="local_id" id="local_id" class="form-select">
            <option value="">Seleccione un local</option>
            @foreach($locals as $local)
                <option
                    value="{{ $local->id }}" {{ $model->local && $model->local->id === $local->id ? 'selected' : '' }}>{{ $local->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="editor" id="c2" name="web_description">{{ $model->web_description }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Formación Academica <span class="text-danger">*</span></label>
        <textarea class="editor" id="c0" name="web_info">{{ $model->web_info }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Servicios <span class="text-danger">*</span></label>
        <textarea class="editor" id="c1" name="web_services">{{ $model->web_services }}</textarea>
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

<script>
    var allEditors = document.querySelectorAll('.editor');
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(allEditors[i]);
    }
</script>
