<section class="about section" id="about">
    <h2 data-heading="My Intro" class="section__title">About Me</h2>

    <div class="about__container container grid">
        <img src="{{ asset($about->about_img) }}" alt="" class="about__img" />

        <div class="about__data">
            <h3 class="about__heading">{{ $about->title }}</h3>
            <p class="about__description">{{ $about->description }}</p>
            <div class="about__info grid">
                <div class="about__box">
                    <i class="uil uil-award about__icon"></i>
                    <h3 class="about__title">Experience</h3>
                    <span class="about__subtitle">{{ $about->experience }}</span>
                </div>

                <div class="about__box">
                    <i class="uil uil-suitcase-alt about__icon"></i>
                    <h3 class="about__title">Completed</h3>
                    <span class="about__subtitle">{{ $about->Completed }}</span>
                </div>

                <div class="about__box">
                    <i class="uil uil-headphones-alt about__icon"></i>
                    <h3 class="about__title">Support</h3>
                    <span class="about__subtitle">{{ $about->support }}</span>
                </div>
            </div>
            <a href="#contact" class="button"><i class="uil uil-navigator button__icon"></i>Contact Me</a>
        </div>
    </div>
</section>
