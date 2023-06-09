<form method="POST" action="{{ route('root.home.contact') }}">
    @csrf

    <div class="row mb-4 gy-4">
        <div class="col-lg-12 col-xl-5">
            <label for="name" class="form-label">Nombre y apellido</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe tu nombre aquí..."
                   required>
        </div>
        <div class="col-12 col-lg">
            <label for="phone" class="form-label">Número de contacto</label>
            <input type="tel" class="form-control" id="phone" name="telephone" placeholder="Nro de teléfono..."
                   required>
        </div>
        <div class="col-12 col-lg">
            <label for="document" class="form-label">Doc. de Identidad</label>
            <input type="number" class="form-control" id="document" name="document" placeholder="Doc. de identidad..."
                   required>
        </div>
        <div class="col-12 col-lg">
            <label for="specialty" class="form-label">Especialidad</label>
            <input type="text" class="form-control" id="specialty" name="specialty" placeholder="Especialidad..."
                   required>
        </div>
    </div>

    <div class="mb-5">
        <label for="content" class="form-label">Escribe tu consulta</label>
        <textarea class="form-control" id="content" name="message" placeholder="Escribe tu mensaje aquí..." rows="8"
                  style="resize: none" required></textarea>
    </div>

    <div class="text-center">
        <input type="submit" value="¡Reserva tu cita aquí!"
               class="btn btn-secondary btn-lg px-5 fw-semibold">
    </div>
</form>
