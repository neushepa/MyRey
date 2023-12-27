@extends('layouts.frontend.main')

@section('title')
    Profile
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
