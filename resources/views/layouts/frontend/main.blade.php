{{-- PHP Url : Start --}}
@php
    $url = Route::current()->getName();

    // Exploded URL
    $explodedURL = explode('.', $url);

@endphp
{{-- PHP Url : End --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Website - @yield('title')</title>

    {{-- Online Assets --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    {{-- Offline Assets --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">


    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Custom CSS In Page --}}
    @yield('css')

</head>

<body>

    {{-- Header : Start --}}
    @if ($url == '')
        @include('components.frontend.header-landing')
    @else
        @include('components.frontend.header-other')
    @endif
    {{-- Header : End --}}

    {{-- Content : Start --}}
    @yield('content')
    {{-- Content : End --}}

    {{-- Footer : Start --}}
    @if (
    str_contains($url, 'profile') || 
    str_contains($url, 'article.detail') ||
    str_contains($url, 'activity.detail')
    )
        @include('components.frontend.footer-typeb')
    @else
        @include('components.frontend.footer-typea')
    @endif
    {{-- Footer : End --}}

    {{-- Modal if there is any : Start --}}
    @yield('modal')
    {{-- Modal if there is any : End --}}

    {{-- Online Assets --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.js"></script>

    {{-- Offline Assets --}}
    <script src="{{ asset('assets/frontend/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- Pop Up Image --}}
    <script>
        $(document).ready(function() {
        $('.popup-image').magnificPopup({
            type: 'image',
		    closeOnContentClick: true,
		    closeBtnInside: false,
		    fixedContentPos: true,
		    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		    image: {
			    verticalFit: true
		    },
		    zoom: {
			    enabled: true,
			    duration: 300 // don't foget to change the duration also in CSS
		    }
            });
        });
    </script>

    {{-- Custom JS In Page --}}
    @yield('js')

</body>

</html>
