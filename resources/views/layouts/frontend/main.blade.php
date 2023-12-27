{{-- PHP Url : Start --}}
@php
    $url = Route::current()->getName();
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
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
    @if (str_contains($url, 'profile'))
        @include('components.frontend.footer-typeb')
    @else
        @include('components.frontend.footer-typea')
    @endif
    {{-- Footer : End --}}


    {{-- Offline Assets --}}
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
