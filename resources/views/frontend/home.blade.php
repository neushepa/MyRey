@extends('layouts.frontend.main')

@section('css')
    <style>
        /* Carousel recent : Start */
        .carousel-slider {
            width: 100%;
            height: 500px;
        }

        .carousel-indicators button.active {
            background-color: #cf3774;
            opacity: 1;
        }

        button.carousel-control-prev:hover {
            color: #cf3774;
        }

        /* Carousel recent : End */
    </style>
@endsection

@section('title')
    Home
@endsection

@section('content')

    {{-- Carousel : Start --}}
    @include('components.frontend.carousel-recent')
    {{-- Carousel : End --}}

    {{-- Simple About : Start --}}
    @include('components.frontend.simple-about')
    {{-- Simple About : End --}}

    {{-- Recent Activity: Start --}}
    @include('components.frontend.activity-card-recent')
    {{-- Recent Activity: End --}}
    
@endsection
