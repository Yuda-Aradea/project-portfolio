<section class="testimonials section">
    <h2 data-heading="My clients say" class="section__title">Testimonials</h2>

    <div class="testimonial__container container swiper">
        <div class="swiper-wrapper">
            @foreach ($testi as $item)
                <div class="testimonial__card swiper-slide">
                    <div class="testimonial__quote">
                        <i class="bx bxs-quote-alt-left"></i>
                    </div>
                    <p class="testimonial__description">{{ $item->description }}</p>
                    <h3 class="testimonial__date">{{ $item->date }}</h3>
                    <div class="testimonial__profile">
                        <img src="{{ asset($item->photos) }}" alt="" class="testimonial__profile-img" />

                        <div class="testimonial__profile-data">
                            <span class="testimonial__profile-name">{{ $item->name }}</span>
                            <span class="testimonial__profile-detail">{{ $item->title }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
