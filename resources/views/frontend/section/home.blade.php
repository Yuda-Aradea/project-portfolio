<section class="home" id="home"
    style="background-image: url({{ asset($home->home_bg) }}); background-size: cover; background-position: center center;">
    <div class="home__container container grid">
        <div class="home__social">
            <span class="home__social-follow"> Follow Me </span>
            <div class="home__social-links">
                <a href="{{ $header->facebook }}" target="_blank" class="home__social-link"><i
                        class="uil uil-facebook-f"></i>
                </a>
                <a href="{{ $header->instagram }}" target="_blank" class="home__social-link"><i
                        class="uil uil-instagram"></i></a>
                <a href="{{ $header->twitter }}" target="_blank" class="home__social-link"><i
                        class="uil uil-twitter"></i></a>
            </div>
        </div>

        <img src="{{ asset($home->photo_mobile) }}" alt="" class="home__img" />

        <div class="home__data">
            <h1 class="home__title">Hi, I'am {{ $home->name }}</h1>
            <h3 class="home__subtitle">{{ $home->title }}</h3>
            <p class="home__description">{{ $home->description }}
            </p>
            <a href="#about" class="button"><i class="uil uil-user button__icon"></i> More About Me</a>
        </div>

        <div class="my__info">
            <div class="info__item">
                <i class="uil uil-facebook-messenger info__icon"></i>

                <div>
                    <h3 class="info__title">Messenger</h3>
                    <span class="info__subtitle">{{ $home->messenger }}</span>
                </div>
            </div>

            <div class="info__item">
                <i class="uil uil-whatsapp info__icon"></i>

                <div>
                    <h3 class="info__title">Whatsapp</h3>
                    <span class="info__subtitle">{{ $home->whatsapp }}</span>
                </div>
            </div>

            <div class="info__item">
                <i class="uil uil-envelope-edit info__icon"></i>

                <div>
                    <h3 class="info__title">Email</h3>
                    <span class="info__subtitle">{{ $home->email }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
