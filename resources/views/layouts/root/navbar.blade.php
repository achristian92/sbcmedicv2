<div class="container-xl">
    <nav class="navbar navbar-expand-lg">
        <a href="{{ route('root.home.index') }}" class="navbar-brand">
            <x-root.svg.logo/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('root.home.index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('root.home.index') }}" data-action="nav-smooth" data-target="nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('root.home.index') }}" data-action="nav-smooth" data-target="especialidades">Especialidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('root.doctors.index') }}">Médicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('root.home.index') }}" data-action="nav-smooth" data-target="contacto">Trabaja con nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('root.home.index') }}" data-action="nav-smooth" data-target="contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
