<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" height="45" class="logo-light-mode" alt="">
                <img src="{{ asset('images/logo.png') }}" height="45" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('images/logo.png') }}" height="45" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="{{ route('home') }}"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>

            <li><a href="{{ route('appointment.index',"status=1&month=".now()->format('Y-m')) }}"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Citas</a></li>
            <li><a href="{{ route('solicitud-citas.index') }}"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Solicitud Citas</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-file-info-alt me-2 d-inline-block"></i>Servicios</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('service.recipes.index') }}">Recetas</a></li>
                        <li><a href="{{ route('service.procedures.index') }}">Procedimientos</a></li>
                        <li><a href="{{ route('service.specialties.index') }}">Especialidades</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-setting me-2 d-inline-block"></i>Configuración</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('setting.doctors.index') }}">Doctores</a></li>
                        <li><a href="{{ route('setting.schedules.index') }}">Horarios</a></li>
                        <li><a href="{{ route('setting.exams.index') }}">Exámenes</a></li>
                        <li><a href="{{ route('setting.roles.index') }}">Roles</a></li>
                        <li><a href="{{ route('setting.permissions.index') }}">Permisos</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-setting me-2 d-inline-block"></i>Landing</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('landing.doctors.index') }}">Doctores</a></li>
                        <li><a href="{{ route('landing.specialties.index') }}">Especialidades</a></li>
                        <li><a href="{{ route('landing.locals.index') }}">Sedes</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>

</nav>
