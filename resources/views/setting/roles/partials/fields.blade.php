<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Nombre <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'descripcion'])
        </div>
    </div>
</div>

<h6 class="font-weight-bold">Permisos</h6>
<div class="row">
    @foreach($permissions as $permission)
        <div class="col-md-3">
            <div class="form-check form-check-inline">
                <input id="int_{{ $permission->id }}" type="checkbox"  name="permissions[]" value="{{ $permission->id }}" class="form-check-input"
                    {{ in_array($permission->id, old('permissions', $model->id ? $model->permission()->pluck('permiso.id')->toArray() : [])) ? 'checked' : '' }} >
                <label for="int_{{ $permission->id }}" class="form-check-label">{{ $permission->descripcion }}</label>
            </div>
        </div>
    @endforeach

</div>

@includeWhen($model->id,'components.is-active-check')


@include('components.form-actions')
