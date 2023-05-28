<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--========== UNICONS ==========-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!--========== BOXICONS ==========-->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <!--========== SWIPER CSS ==========-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" />

    <!--========== MAIN CSS ==========-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset($header->favicon) }}" />

    <!-- Icon CSS -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <title>{{ $header->title }}</title>
</head>

<body>
    <!--========== Sweetalert ==========-->
    @include('sweetalert::alert')
    <!--========== SIDEBAR ==========-->
    @include('frontend.body.sidebar')
    <!--========== MAIN ==========-->
    <main class="main">
        <!--===== Home =====-->
        @include('frontend.section.home')

        <!--===== About =====-->
        @include('frontend.section.about')

        <!--===== Qualification =====-->
        @include('frontend.section.qualification')

        <!--===== Skills =====-->
        @include('frontend.section.skills')

        <!--===== Work =====-->
        @include('frontend.section.portfolio')

        <!--===== Services =====-->
        @include('frontend.section.services')

        <!--===== Testimonials =====-->
        @include('frontend.section.testimonials')

        <!--===== Contact =====-->
        @include('frontend.section.contact')

        <!--===== FOOTER =====-->
        @include('frontend.body.footer')
    </main>

    <!--========== SCROLL UP ==========-->

    <!--========== MIXITUP FILTER ==========-->
    <script src="{{ asset('frontend/assets/js/mixitup.min.js') }}"></script>

    <!--========== SWIPER JS ==========-->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>

    <!--========== MAIN JS ==========-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
