<div class="row">
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Nombres <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'firstname'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Apellidos <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'lastname'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Tipo documento<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="idTypeDocument" required>
                <option selected>Seleccionar</option>
                @foreach($documentTypes as $type)
                    <option value="{{ $type->id }}" {{ old('idTypeDocument', $model->idTypeDocument) == $type->id ? 'selected' : '' }}>{{ $type->description }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Nro Documento <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'document'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Correo</label>
            @include('components.input-text',['name' => 'email'])
        </div>
    </div>
    <div class="col-md-3">
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            @include('components.input-text',['name' => 'phone'])
        </div>
    </div>

    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Sexo<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="sex" required>
                <option value="" selected>Seleccionar</option>
                <option value="M" {{ $model->sex == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ $model->sex == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">F. de nacimiento </label>
            @include('components.input-date',['name' => 'birthdate'])
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Rol<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="idRol" required>
                <option value="" selected>Seleccionar</option>
                @foreach($roles as $rol)
                    <option value="{{ $rol->id }}" {{ old('idRol', $model->idRol) == $rol->id ? 'selected' : '' }}>{{ $rol->descripcion }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Distrito<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="idDistrict" required>
                <option value="" selected>Seleccionar</option>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ old('idDistrict', $model->idDistrict) == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-10">
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            @include('components.input-text',['name' => 'address'])
        </div>
    </div>
</div>
@includeWhen($model->id,'components.is-active-check')


@include('components.form-actions')
