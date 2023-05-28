<section class="qualification section">
    <h2 data-heading="My Journey" class="section__title">Qualification</h2>

    <div class="qualification__container container grid">
        <div class="education">
            <h3 class="qualification__title"><i class="uil uil-graduation-cap"></i> Education</h3>

            <div class="timeline">
                @foreach ($education as $item)
                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title">{{ $item->name }}</h3>
                        <p class="timeline__text">{{ $item->title }}</p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i> {{ $item->years }} </span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="experience">
            <h3 class="qualification__title"><i class="uil uil-suitcase"></i> Experience</h3>

            <div class="timeline">
                @foreach ($experience as $item)
                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title">{{ $item->name }}</h3>
                        <p class="timeline__text">{{ $item->title }}</p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>{{ $item->years }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
