@extends('layouts.frontend.main')

@section('title')
    {{ $title }}
@endsection

@section('css')
    <style>
    </style>
@endsection

@section('content')
    {{-- Detail Post : Start --}}
    @include('components.frontend.post-detail')
    {{-- Detail Post : End --}}

    {{-- Another Post : Start --}}
    @include('components.frontend.another-post')
    {{-- Another Post : End --}}
@endsection

@section('js')
    <script>
    </script>
@endsection
