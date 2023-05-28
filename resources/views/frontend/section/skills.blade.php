<section class="skill section" id="skills">
    <h2 data-heading="My Abilities" class="section__title">My Experience</h2>

    <div class="skills__container container grid">
        <div class="skills__tabs">
            <div class="skills__header skills__active" data-target="#frontend">
                <i class="{{ $skill1->icon }} skills__icon"></i>

                <div>
                    <h1 class="skills__title">{{ $skill1->name }}</h1>
                    <span class="skills__subtitle">{{ $skill1->title }}</span>
                </div>
                <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__header" data-target="#design">
                <i class="{{ $skill2->icon }} skills__icon"></i>

                <div>
                    <h1 class="skills__title">{{ $skill2->name }}</h1>
                    <span class="skills__subtitle">{{ $skill2->title }}</span>
                </div>
                <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__header" data-target="#backend">
                <i class="{{ $skill3->icon }} skills__icon"></i>

                <div>
                    <h1 class="skills__title">{{ $skill3->name }}</h1>
                    <span class="skills__subtitle">{{ $skill3->title }}</span>
                </div>
                <i class="uil uil-angle-down skills__arrow"></i>
            </div>
        </div>

        <div class="skills__content">
            <div class="skills__group skills__active" data-content id="frontend">
                <div class="skills__list grid">
                    @foreach ($skill1_detail as $item)
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">{{ $item->name }}</h3>
                                <span class="skills__number">{{ $item->percentage }}%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: {{ $item->percentage }}%"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="skills__group" data-content id="design">
                <div class="skills__list grid">
                    @foreach ($skill2_detail as $item)
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">{{ $item->name }}</h3>
                                <span class="skills__number">{{ $item->percentage }}%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: {{ $item->percentage }}%"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="skills__group" data-content id="backend">
                <div class="skills__list grid">
                    @foreach ($skill3_detail as $item)
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">{{ $item->name }}</h3>
                                <span class="skills__number">{{ $item->percentage }}%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: {{ $item->percentage }}%"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
