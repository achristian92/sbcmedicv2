<div class="footer container">
    <div class="footer-logo">
        <a href="{{ route('root.home.index') }}">
            <x-root.svg.logo/>
        </a>
    </div>
    <div class="footer-text">
        <h6>Nosotros</h6>
        <a href="{{ route('root.home.index') }}" class="footer-link">Inicio</a>
        <a href="{{ route('root.home.index') }}" data-action="nav-smooth" data-target="especialidades" class="footer-link">Especialidades</a>
        <a href="{{ route('root.doctors.index') }}" class="footer-link">Médicos</a>
        <a href="{{ route('root.home.index') }}" data-action="nav-smooth" data-target="contacto" class="footer-link">Contacto</a>
    </div>
    <div class="footer-social">
        <h6>Redes sociales</h6>
        <ul>
            <li>
                <a href="https://www.youtube.com/channel/UCViWTA3N46DfqkfldDAH65A" target="_blank">
                    <x-root.svg.youtube/>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/sbc-medic/" target="_blank">
                    <x-root.svg.linkedin/>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/sbcmedic/" target="_blank">
                    <x-root.svg.instagram/>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/sbcmedicpoliclinico" target="_blank">
                    <x-root.svg.facebook/>
                </a>
            </li>
            <li>
                <a href="https://www.tiktok.com/@sbcmedic_peru?is_from_webapp=1&sender_device=pc" target="_blank">
                    <img src="{{ asset('landing_assets/images/tiktok.png') }}" alt="tiktok" />
                </a>
            </li>
        </ul>
    </div>
    <div class="footer-contact">
        <div class="d-flex align-items-center justify-content-center gap-2 mb-3 pe-6">
            <x-root.svg.telephone/>
            <span class="footer-contact-text">Contáctanos</span>
        </div>
        <span class="footer-number">01 (739-0991)</span>
    </div>
</div>
