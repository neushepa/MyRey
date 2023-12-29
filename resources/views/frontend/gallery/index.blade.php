@extends('layouts.frontend.main')

@section('title')
    {{ $title }}
@endsection

@section('content')

    {{-- Gallery : Start --}}
    @include('components.frontend.gallery-list')
    {{-- Gallery : End --}}

@endsection
