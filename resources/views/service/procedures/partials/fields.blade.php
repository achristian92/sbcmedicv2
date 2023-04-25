<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Nombre <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'descripcion'])
        </div>
    </div>
{{--    <div class="col-md-3">--}}
{{--        <div class="mb-3">--}}
{{--            <label class="form-label">Código interno </label>--}}
{{--            @include('components.input-text',['name' => 'codigo_interno'])--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            @include('components.input-text',['name' => 'tipo'])
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Especialidad <span class="text-danger">*</span></label>
            <select class="form-select form-control" name="idEspecialidad">
                <option value="" selected>Seleccionar</option>
                @foreach($specialities as $specialty)
                    <option value="{{ $specialty->id }}" {{ old('idEspecialidad', $model->idEspecialidad) == $specialty->id ? 'selected' : '' }}>{{ $specialty->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Motivo de cita <span class="text-danger">*</span></label>
            <select class="form-select form-control" name="idMotivoCita">
                <option value="" selected>Seleccionar</option>
                @foreach($reasonAppointments as $reason)
                    <option value="{{ $reason->id }}" {{ old('idMotivoCita', $model->idMotivoCita) == $reason->id ? 'selected' : '' }}>{{ $reason->descripcion }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Tiempo(minutos) </label>
            @include('components.input-number',['name' => 'tiempo'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Precio</label>
            @include('components.input-number',['name' => 'precio'])
        </div>
    </div>
</div>
@includeWhen($model->id,'components.is-active-check')

@include('components.form-actions')

