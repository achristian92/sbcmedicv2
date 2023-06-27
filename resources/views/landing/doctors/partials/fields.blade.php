<div class="col-md-4 mb-3">
    <div class="d-flex align-items-end gap-3">
        <div class="flex-grow-1">
            <label class="form-label d-flex gap-1 align-items-center" for="attachment_img">
                Imagen
                <small style="font-size: 12px; color: rgba(0, 0, 0, 0.35)">(1080x1350)</small>
            </label>
            <input type="file" class="form-control" name="attachment_img" id="attachment_img">
        </div>
        @if ($model->web_src_img)
            <img src="{{ asset($model->web_src_img) }}" alt="{{ $model->getFullNameAttribute() }}"
                 class="avatar avatar-md-sm rounded-circle border shadow"/>
        @endif
    </div>
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

{{--    <div class="col-12 mb-3">--}}
{{--        <label class="form-label">Descripción</label>--}}
{{--        <textarea class="editor" id="c2" name="web_description">{{ $model->web_description }}</textarea>--}}
{{--    </div>--}}

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Formación Academica <span class="text-danger">*</span></label>
        <textarea class="editor" id="c0" name="web_info">{{ $model->web_info }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Servicios <span class="text-danger">*</span></label>
        <textarea class="editor" id="c1" name="web_services">{{ $model->web_services }}</textarea>
    </div>
</div>

<div class="mb-3">
    <label class="form-label">¿Que información mostrar? <span class="text-danger">*</span></label>
    <div class="row col-lg-6 col-xl-5 col-xxl-4">
        <div class="col">
            <div class="custom-control custom-radio custom-control-inline">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="radio" name="web_info_type" id="rne"
                           value="rne" {{ $model->web_info_type === 'rne' ? 'checked' : '' }}>
                    <label class="form-check-label" for="rne">RNE</label>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="custom-control custom-radio custom-control-inline">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="radio" name="web_info_type" id="cnp"
                           value="cnp" {{ $model->web_info_type === 'cnp' ? 'checked' : '' }}>
                    <label class="form-check-label" for="cnp">CNP</label>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="custom-control custom-radio custom-control-inline">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="radio" name="web_info_type" id="cpp"
                           value="cpp" {{ $model->web_info_type === 'cpp' ? 'checked' : '' }}>
                    <label class="form-check-label" for="cpp">CPP</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="statusForm"
               name="web_is_active"
               value="1" {{ $model->web_is_active || old('web_is_active', false) === true ? 'checked' : '' }}>
        <label class="form-check-label" for="statusForm">¿Está activo?</label>
    </div>
</div>

@include('components.form-actions')

<script>
    var allEditors = document.querySelectorAll('.editor');
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(allEditors[i]);
    }
</script>
