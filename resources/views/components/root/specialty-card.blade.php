<div class="card specialties-card">
    <div class="card-body">
        <img src="{{ asset($specialty->web_src_icon) }}" alt="">
        <h6 class="card-title">{{ $specialty->name }}</h6>
        <a class="stretched-link" data-bs-toggle="modal"
           data-bs-target="#modal-specialty-{{ $specialty->getIdAttribute() }}"></a>
    </div>
</div>
