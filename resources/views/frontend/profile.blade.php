@extends('layouts.frontend.main')

@section('title')
    Profile
@endsection

@section('content')
    
    {{-- About Me : Start --}}
    @include('components.frontend.about-me')
    {{-- About Me : End --}}

    {{-- Educational Background : Start --}}
    @include('components.frontend.educational-bg')
    {{-- Educational Background : End --}}

    {{-- Profile : Start --}}
    @include('components.frontend.profile-me')
    {{-- Profile : End --}}

    {{-- Location Maps : Start --}}
    @include('components.frontend.location-maps')
    {{-- Location Maps : End --}}

@endsection
