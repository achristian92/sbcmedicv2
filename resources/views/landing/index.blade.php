@extends('layouts.root')
@section('content')
    <article class="hero">
        <div class="hero-img">
            <img src="{{ asset('landing_assets/images/portada.jpg') }}" alt="Portada"/>
        </div>
        <div class="container-xl">
            <div class="hero-body">
                <p class="hero-title">
                    Bienestar y tranquilidad para ti y tu familia: <br/>
                    Visítanos hoy
                </p>
                <p class="hero-subtitle">
                    Descubre cómo nuestros profesionales altamente capacitados y tecnología de vanguardia trabajan
                    juntos
                    para
                    brindarte una atención médica de calidad y personalizada.
                </p>
                <button class="btn hero-btn">¡Agenda tu cita hoy mismo!</button>
            </div>
        </div>
    </article>

    <section class="container py-6">
        <div class="section mb-5">
            <h1 class="text-center">Modalidades de atención</h1>
            <h5 class="text-center">
                Atención médica adaptada a tus necesidades: descubre nuestras modalidades de atención en SBCmedic
            </h5>
        </div>
        <div class="section-xl">
            <div class="row justify-content-center gy-4">
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card h-100 modality-card">
                        <img class="card-img-top object-fit-contain" src="{{ asset('landing_assets/images/medicos-domicilio.png') }}" alt="Portada" style="height: 175px"/>
                        <div class="card-body">
                            <h6 class="card-title">Médicos a domicilio</h6>
                            <p class="card-text">
                                ¿Necesitas atención médica pero no puedes ir al consultorio? En SBCmedic te
                                ofrecemos
                                nuestros
                                servicios
                                de médicos a domicilio para que puedas recibir la atención que necesitas en la
                                comodidad
                                de
                                tu
                                hogar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card h-100 modality-card">
                        <x-root.svg.medicos-at-home class="card-img-top"/>
                        <div class="card-body">
                            <h6 class="card-title">Salud ocupacional</h6>
                            <p class="card-text">
                                Ofrecemos servicios de salud ocupacional para garantizar que tu equipo de trabajo esté
                                sano y seguro. Nuestro equipo está comprometido en proporcionar una atención médica
                                personalizada y enfocada en las necesidades de tu empresa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card h-100 modality-card">
                        <img class="card-img-top object-fit-contain" src="{{ asset('landing_assets/images/tele-medicina.png') }}" alt="Portada" style="height: 175px"/>
                        <div class="card-body">
                            <h6 class="card-title">Tele medicina</h6>
                            <p class="card-text">
                                Sabemos que la atención médica a veces puede ser difícil de obtener debido a la
                                distancia o la falta de tiempo. Es por eso que ofrecemos servicios de telemedicina para
                                que puedas recibir atención médica desde cualquier lugar y en cualquier momento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-6" id="nosotros">
        <div class="section mb-5">
            <h1 class="text-center">
                Conoce más <br/>
                sobre nosotros
            </h1>
        </div>

        <div class="section-xl">
            <ul class="list-us mb-5 row gy-4">
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Médicos experimentados.</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Pruebas de laboratorio eficientes y eficaces.</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Más de 20 especialidades.</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Certificados para salud ocupaciones.</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Equipos tecnológicos de última generación.</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Servicio a domicilio</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Atención de calidad y rápida.</span>
                </li>
                <li class="list-us-item col-12 col-md-6">
                    <span class="list-us-icon"><i class="bi bi-caret-right-fill"></i></span>
                    <span class="list-us-text">Paquetes corporativos precios competitivos.</span>
                </li>
            </ul>
            <div class="banner-us">
                <img src="{{ asset('landing_assets/images/medicos.png') }}" alt="Medicos"/>
            </div>
        </div>

    </section>

    <section class="container py-6" id="especialidades">
        <div class="section mb-5">
            <h1 class="text-center">Nuestras especialidades médicas</h1>
            <h5 class="text-center">
                Descubre cómo nuestras especialidades médicas pueden mejorar tu calidad de vida hoy mismo.
            </h5>
        </div>

        <div class="section-xxl">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 gx-4 gy-5">
                @for ($i = 0; $i < 10; $i++)
                    <div class="col">
                        <div class="card specialties-card">
                            <div class="card-body">
                                <x-root.svg.ear/>

                                <h6 class="card-title">Otorrinolaringología</h6>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="container py-6">
        <div class="section mb-5">
            <h1 class="text-center">Nuestro staff médico</h1>
            <h5 class="text-center">
                Un equipo médico dedicado a su bienestar: Conozca a nuestros especialistas en SBCmedic
            </h5>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-4 gx-6 gy-5">
            @for ($i = 0; $i < 4; $i++)
                <div class="col">
                    <div class="card doctor-card">
                        <div class="card-body">
                            <div class="card-figure" style="background-color: #024963">
                                <img src="{{ asset('landing_assets/images/doctor.png') }}" alt=""/>
                            </div>
                            <h6 class="card-title">Dr. Cesar Alfaro</h6>
                            <div class="card-content">
                                <span class="card-text">CMP: 67655</span>
                                <span class="card-text">RNE: A07018</span>
                            </div>
                            <span class="card-badge"
                                  style="background-color: #ecfff6; color: #36ae73">Medicina general</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <section class="container py-6">
        <div class="section-xl">
            <div class="row gx-6 gy-5">
                <div class="col-12 col-lg-auto d-flex order-1 order-lg-0">
                    <figure class="banner-vertical">
                        <img src="{{ asset('landing_assets/images/doctora.png') }}" alt="Medicos"/>
                    </figure>
                </div>
                <div class="col-12 col-lg">
                    <h1 class="mb-5">Preguntas frecuentes sobre nuestros servicios médicos</h1>

                    <div class="accordion sbc" id="frequent-questions">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="accordion-title">¿Qué servicios ofrece la SBC Medic?</span>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                 data-bs-parent="#frequent-questions">
                                <div class="accordion-body">
                                    Contamos con más de 20 especialidades médicas entre ellas: Medicina general,
                                    Ginecología,
                                    Cardiología, Urología, etc.; garantizando seguridad, bienestar y confianza en todos
                                    nuestros pacientes ¡Salud al alcance de todos!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span
                                        class="accordion-title">¿Cuáles son los horarios de atención en SBC Medic?</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#frequent-questions">
                                <div class="accordion-body">
                                    En SBC Medic estamos para cuidarte por eso nuestro horario de atención es de lunes a
                                    viernes de 8:00 am a 6:00 pm y sábados 8:00 am a 2:00 pm. Nuestro equipo de
                                    profesionales médicos y personal de atención al cliente está listo para brindarte la
                                    mejor atención.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span class="accordion-title">¿Cuenta con Farmacia dentro de la Clínica?</span>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                 data-bs-parent="#frequent-questions">
                                <div class="accordion-body">
                                    Por supuesto, en nuestra farmacia podrás encontrar los medicamentos y vitaminas que
                                    necesitas a un precio cómodo en su horario de atención de lunes a viernes de 8:00 am
                                    a
                                    6:00 pm y sábados 8:00 am a 2:00 pm.
                                    Pueden contactarse con nuestra farmacia por Whatsapp al 934 755 614.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span
                                        class="accordion-title">¿Cómo puedo obtener mis resultados de Laboratorio?</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#frequent-questions">
                                <div class="accordion-body">
                                    Los resultados son enviados al correo personal del paciente respetando las políticas
                                    de
                                    privacidad de SBC Medic.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                <span
                                    class="accordion-title">¿Si soy Vecino Barranquino tengo algún beneficio extra?</span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                 data-bs-parent="#frequent-questions">
                                <div class="accordion-body">
                                    Como #VECINOBARRANQUINOPUNTUAL (VBP) obtienes 2 consultas gratis en el año y
                                    descuentos
                                    exclusivos en todos nuestros servicios presentando tu tarjeta VBP gracias a nuestro
                                    convenio con la Municipalidad de Barranco.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                            <span
                                class="accordion-title">¿Es una Clínica habilitada para personas con discapacidad?</span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                 data-bs-parent="#frequent-questions">
                                <div class="accordion-body">
                                    En SBC Medic contamos con atención médica y acceso a recursos guiando al paciente de
                                    forma adecuada asistida por nuestro personal.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-6">
        <div class="section mb-5">
            <h1 class="text-center">Alianzas</h1>
        </div>
        <section id="splide-element" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide text-center">
                        <img class="w-100 object-fit-contain" src="{{ asset('landing_assets/images/maxnet.svg') }}"
                             alt="" style="height: 65px">
                    </li>
                    <li class="splide__slide text-center">
                        <img class="w-100 object-fit-contain" src="{{ asset('landing_assets/images/agp.svg') }}" alt=""
                             style="height: 65px">
                    </li>
                    <li class="splide__slide text-center">
                        <img class="w-100 object-fit-contain" src="{{ asset('landing_assets/images/lives.svg') }}"
                             alt="" style="height: 65px">
                    </li>
                    <li class="splide__slide text-center">
                        <img class="w-100 object-fit-contain" src="{{ asset('landing_assets/images/suizalab.png') }}"
                             alt="" style="height: 65px">
                    </li>
                    <li class="splide__slide text-center">
                        <img class="w-100 object-fit-contain" src="{{ asset('landing_assets/images/unilab.png') }}"
                             alt="" style="height: 65px">
                    </li>
                    <li class="splide__slide text-center">
                        <img class="w-100 object-fit-contain" src="{{ asset('landing_assets/images/fedseg.png') }}"
                             alt="" style="height: 65px">
                    </li>
                </ul>
            </div>
        </section>
    </section>

    <div class="sbc-contact" id="contacto">
        <section class="container py-6">
            <div class="section mb-5">
                <h1 class="text-center">Contacto</h1>
            </div>
            <div class="section-xl">
                <form method="POST" action="#">
                    @csrf
                    <div class="row mb-4 gy-4">
                        <div class="col-lg-12 col-xl-5">
                            <label for="name" class="form-label">Nombre y apellido</label>
                            <input type="text" class="form-control" id="name" placeholder="Escribe tu nombre aquí...">
                        </div>
                        <div class="col-12 col-lg">
                            <label for="phone" class="form-label">Número de contacto</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Nro de teléfono...">
                        </div>
                        <div class="col-12 col-lg">
                            <label for="document" class="form-label">Doc. de Identidad</label>
                            <input type="number" class="form-control" id="document" placeholder="Doc. de identidad...">
                        </div>
                        <div class="col-12 col-lg">
                            <label for="specialty" class="form-label">Especialidad</label>
                            <input type="text" class="form-control" id="specialty" placeholder="Especialidad...">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="content" class="form-label">Número de contacto</label>
                        <textarea class="form-control" id="content" placeholder="Escribe tu mensaje aquí..." rows="8"
                                  style="resize: none"></textarea>
                    </div>

                    <div class="text-center">
                        <input type="button" value="¡Reserva tu cita aquí!"
                               class="btn btn-secondary btn-lg px-5 fw-semibold">
                    </div>
                </form>
            </div>
        </section>
    </div>

    <section class="container py-6">
        <div class="sbc-address">
            <div class="sbc-address-info">
                <ul class="sbc-address-list">
                    <li>
                        <span class="sbc-address-icon"><x-root.svg.map/></span>
                        <span class="sbc-address-title">Direccion:</span>
                        <span class="sbc-address-text">Manuel Raygada 170, San Miguel</span>
                    </li>
                    <li>
                        <span class="sbc-address-icon"><x-root.svg.phone/></span>
                        <span class="sbc-address-title">Horario de atención:</span>
                        <span class="sbc-address-text">Lunes a viernes: 8:00 am a 6:00 pm</span>
                        <span class="sbc-address-text">Sábado: 8:00 am a 12 pm</span>
                    </li>
                    <li>
                        <span class="sbc-address-icon"><x-root.svg.clock/></span>
                        <span class="sbc-address-title">Teléfonos:</span>
                        <span class="sbc-address-text">(01) 219-1100</span>
                        <span class="sbc-address-text">+51 978 217 901</span>
                    </li>
                </ul>
            </div>
            <div class="sbc-address-map bg-light">
                <div id="map" class="w-100" style="height: 400px"></div>
            </div>
        </div>
    </section>
@endsection
