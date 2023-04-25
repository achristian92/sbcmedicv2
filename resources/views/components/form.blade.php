<div class="d-md-flex justify-content-between align-items-center">
    <h5 class="mb-0">{{ $title }}</h5>

    <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
        <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
            <li class="breadcrumb-item text-capitalize">
                @if(request()->segment(1) === 'setting')
                    <a href="#">Configuración</a>
                @elseif(request()->segment(1) === 'service')
                    <a href="">Servicios</a>
                @else
                    <a href="">General</a>
                @endif
            </li>
            <li class="breadcrumb-item text-capitalize active" aria-current="page">{{ ucfirst(strtolower($title)) }}</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="card rounded shadow">
            <div class="p-4">
                @include('components.errors-and-messages')
                {{ $content }}
            </div>
        </div>
    </div>
</div>
