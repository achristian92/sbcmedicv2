@extends('layouts.root')
@section('content')
    <div class="container-xl">
        <div class="row gx-4 gy-5">
            <div class="col-12 col-sm-4 col-xl-3">
                <div class="sbc-medic-figure mb-4">
                    <img src="{{ asset('landing_assets/images/doctor.png') }}" alt=""/>
                </div>

                <div class="sbc-medic-info">
                    <h1 class="fs-2 mb-3">Dr. Rodrigo Cuba</h1>

                    <div class="sbc-medic-info-item">
                        <span class="sbc-medic-info-title">Especialidad</span>
                        <span class="sbc-medic-info-text">Pediatría, Medicina general</span>
                    </div>

                    <div class="sbc-medic-info-item">
                        <span class="sbc-medic-info-title">Horarios</span>
                        <span class="sbc-medic-info-text">Lunes - Viernes <br> 7 a.m. - 9 p.m.</span>
                        <span class="sbc-medic-info-text">Sábados - Domingos
                             <br> 7 a.m. - 9 p.m.</span>
                    </div>

                    <div class="sbc-medic-info-item">
                        <span class="sbc-medic-info-title">Sede</span>
                        <span class="sbc-medic-info-text">Magdalena del Mar</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fs-2 lh-1 m-0">Sobre mí</h1>
                    <button class="btn btn-primary">¡Agenda tu cita hoy mismo!</button>
                </div>

                <p>¡Hola! Soy la Dra. Ana García, pediatra con más de 10 años de experiencia en el cuidado de la salud
                    infantil. Mi enfoque es trabajar en equipo con los padres y tutores para garantizar la mejor
                    atención posible para sus hijos.</p>

                <p>Como pediatra, creo en la importancia de la prevención de enfermedades y promoción de estilos de vida
                    saludables. Me enorgullece proporcionar una atención compasiva y personalizada a cada uno de mis
                    pacientes, y estoy comprometida a asegurar que cada niño que veo se sienta cómodo y seguro durante
                    las visitas.</p>

                <p>Mi objetivo es proporcionar a los padres la información y herramientas necesarias para ayudarles a
                    tomar decisiones informadas sobre la salud de sus hijos. Siempre estoy disponible para responder
                    preguntas y preocupaciones, y mi prioridad es asegurarme de que cada uno de mis pacientes reciba la
                    atención que merece.</p>

                <p>Si estás buscando un pediatra confiable y dedicado para tu hijo, no dudes en contactarme. Estoy
                    deseando conocerte a ti y a tu familia, y trabajar juntos para garantizar la salud y el bienestar de
                    tu hijo.</p>

                <h1 class="fs-2">Educación</h1>

                <ul>
                    <li>Universidad Nacional de San Marcos (Pregrado)</li>
                    <li>Universidad Cayetano Heredia (Postgrado)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
