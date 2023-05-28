<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">{{ $home->name }}</h1>
                <span class="footer__subtitle">{{ $home->title }}</span>
            </div>

            <ul class="footer__links">
                <li>
                    <a href="#services" class="footer__link">Services</a>
                </li>
                <li>
                    <a href="#work" class="footer__link">Work</a>
                </li>
                <li>
                    <a href="#contact" class="footer__link">Contact</a>
                </li>
            </ul>

            <div class="footer__socials">
                <a href="{{ $header->facebook }}" target="_blank" class="footer__social"><i
                        class="uil uil-facebook-f"></i>
                </a>
                <a href="{{ $header->instagram }}" target="_blank" class="footer__social"><i
                        class="uil uil-instagram"></i></a>
                <a href="{{ $header->twitter }}" target="_blank" class="footer__social"><i
                        class="uil uil-twitter"></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; {{ $header->copyright }}</p>
    </div>
</footer>
