
    <div class="top-header">
        <div class="header-bar d-flex justify-content-between border-bottom">
            <div class="d-flex align-items-center">
                <a href="#" class="logo-icon">
                    <img src="{{ asset('images/logo.png') }}" height="30" class="small" alt="">
                    <span class="big">
                                    <img src="{{ asset('images/logo.png') }}" height="22" class="logo-light-mode" alt="">
                                    <img src="{{ asset('images/logo.png') }}" height="22" class="logo-dark-mode" alt="">
                                </span>
                </a>
                <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                    <i class="uil uil-bars"></i>
                </a>
{{--                <div class="search-bar p-0 d-none d-lg-block ms-2">--}}
{{--                    <div id="search" class="menu-search mb-0">--}}
{{--                        <form role="search" method="get" id="searchform" class="searchform">--}}
{{--                            <div>--}}
{{--                                <input type="text" class="form-control border rounded-pill" name="s" id="s" placeholder="Buscar Palabras...">--}}
{{--                                <input type="submit" id="searchsubmit" value="Search">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <ul class="list-unstyled mb-0">
                <li class="list-inline-item mb-0 ms-1">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/doctors/01.jpg') }}" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                            <a class="dropdown-item d-flex align-items-center text-dark" href="#">
                                <img src="{{ asset('assets/images/doctors/01.jpg') }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                <div class="flex-1 ms-2">
                                    <span class="d-block mb-1">{{ $user['first_name'] }}</span>
                                    <small class="text-muted">{{ $user['rol'] }}</small>
                                </div>
                            </a>
                            <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Ajuste de perfil</a>
                            <div class="dropdown-divider border-top"></div>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}">
                                <span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span>
                                Salir
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
