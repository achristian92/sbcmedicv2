<div class="row">
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Prefijo</label>
            @include('components.input-text',['name' => 'title', 'placeholder' => 'Dr, Lic.'])
        </div>
    </div>
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
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Tipo documento<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="document_type_id" required>
                <option selected>Seleccionar</option>
                @foreach($documentTypes as $type)
                    <option value="{{ $type->id }}" {{ old('document_type_id', $model->document_type_id) == $type->id ? 'selected' : '' }}>{{ $type->description }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Nro Documento <span class="text-danger">*</span></label>
            @include('components.input-text',['name' => 'nro_document'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Correo</label>
            @include('components.input-text',['name' => 'email'])
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            @include('components.input-text',['name' => 'phone'])
        </div>
    </div>

    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Sexo<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="gender" required>
                <option value="" selected>Seleccionar</option>
                <option value="M" {{ $model->gender == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ $model->gender == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Fecha de nacimiento </label>
            @include('components.input-date',['name' => 'birthdate'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">CMP</label>
            @include('components.input-text',['name' => 'cmp'])
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">RNE</label>
            @include('components.input-text',['name' => 'rne'])
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">CNP</label>
            @include('components.input-text',['name' => 'cnp'])
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">CPP</label>
            @include('components.input-text',['name' => 'cpp'])
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Especialidad<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="idSpecialty" required>
                <option value="" selected>Seleccionar</option>
                @foreach($specialties as $type)
                    <option value="{{ $type->id }}" {{ old('idSpecialty', $model->idSpecialty) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Código sala</label>
            @include('components.input-text',['name' => 'codigoSala'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="mb-3">
            <label class="form-label">Distrito<span class="text-danger">*</span> </label>
            <select class="form-select form-control" name="district_id" required>
                <option value="" selected>Seleccionar</option>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ old('district_id', $model->district_id) == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
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
