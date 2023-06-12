<div class="modal fade" tabindex="-1" id="modal-specialty-{{ $specialty->getIdAttribute() }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content py-2 px-4">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-1">
                @if($specialty->web_src_img)
                    <figure>
                        <img class="w-100" src="{{ $specialty->web_src_img }}" alt="">
                    </figure>
                @endif
                <div class="sbc-content">{!! $specialty->web_description !!}</div>
            </div>
            <div class="modal-footer border-top-0 justify-content-center">

                <a href="https://api.whatsapp.com/send?phone=51919446233&text=Me gustaría agendar una cita para {{ ucfirst(strtolower($specialty->name)) }}" target="_blank" class="btn btn-primary">¡Reserva tu cita aquí!</a>
            </div>
        </div>
    </div>
</div>
