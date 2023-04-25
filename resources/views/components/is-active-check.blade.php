<div class="form-check form-switch">
    <input type="hidden" name="status" value="0">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
           name="status"
           value="1" {{ $model->status || old('status',0) === 1 ? 'checked' : '' }}>
    <label class="form-check-label" for="flexSwitchCheckDefault">¿Está activo?</label>
</div>
