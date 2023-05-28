<section class="work section" id="work">
    <h2 data-heading="My Portfolio" class="section__title">Recent Works</h2>


    <div class="work__filters">
        <span class="work__item active-work" data-filter="all">All</span>
        @foreach ($category_portfolio as $category)
            <span class="work__item" data-filter=".{{ $category->name }}">{{ $category->name }}</span>
        @endforeach
    </div>

    <div class="work__container container grid">
        @foreach ($portfolio as $item)
            <div class="work__card mix {{ $item->category }}">
                <img src="{{ asset($item->photos) }}" alt="" class="work__img" />
                <h3 class="work__title">{{ $item->name }}</h3>
                <span class="work__button">Demo <i class="uil uil-arrow-right work__button-icon"></i></span>
                <div class="portfolio__item-details ">
                    <h3 class="details__title">{{ $item->title }}</h3>
                    <p class="details__description details__info">{!! $item->description !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Portfolio Popup -->
<div class="portfolio__popup">
    <div class="portfolio__popup-inner">
        <div class="portfolio__popup-content grid">
            <span class="portfolio__popup-close"><i class="uil uil-times"></i></span>
            <div class="pp__thumbnail">
                <img src="assets/img/work-2.webp" alt="" class="portfolio__popup-img" />
            </div>
            <div class="portfolio__popup-info">
                <div class="portfolio__popup-subtitle">Featured - <span>Design</span></div>
                <div class="portfolio__popup-body">
                    <h3 class="details__title">App for technology & Services</h3>
                    <p class="details__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet impedit iste adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>Technologies - <span>HTML CSS</span></li>
                        <li>Role - <span>Frontend</span></li>
                        <li>
                            View - <span><a href="#">www.youtube.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
