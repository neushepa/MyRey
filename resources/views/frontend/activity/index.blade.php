@extends('layouts.frontend.main')

@section('title')
    {{ $title }}
@endsection

@section('content')

    {{-- List Activity : Start --}}
    @include('components.frontend.activity-list')
    {{-- List Activity : End --}}

@endsection

@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Filter Berdasarkan Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        
                        {{-- Kategori 1 : Start --}}
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
                            <a href="{{ route('activity.category', 'kategori-1') }}" class="btn mx-auto btn-pink-custom w-100 rounded-pill">Kategori 1</a>
                        </div>
                        {{-- Kategori 1 : End --}}

                        {{-- Kategori 2 : Start --}}
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
                            <a href="{{ route('activity.category', 'kategori-1') }}" class="btn mx-auto btn-pink-custom w-100 rounded-pill">Kategori 2</a>
                        </div>
                        {{-- Kategori 2 : End --}}

                        {{-- Kategori 3 : Start --}}
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
                            <a href="{{ route('activity.category', 'kategori-1') }}" class="btn mx-auto btn-pink-custom w-100 rounded-pill">Kategori 3</a>
                        </div>
                        {{-- Kategori 3 : End --}}

                        {{-- Kategori 4 : Start --}}
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
                            <a href="{{ route('activity.category', 'kategori-1') }}" class="btn mx-auto btn-pink-custom w-100 rounded-pill">Kategori 4</a>
                        </div>
                        {{-- Kategori 4 : End --}}

                        {{-- Kategori 5 : Start --}}
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
                            <a href="{{ route('activity.category', 'kategori-1') }}" class="btn mx-auto btn-pink-custom w-100 rounded-pill">Kategori 5</a>
                        </div>
                        {{-- Kategori 5 : End --}}

                        {{-- Kategori 6 : Start --}}
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-3">
                            <a href="{{ route('activity.category', 'kategori-1') }}" class="btn mx-auto btn-pink-custom w-100 rounded-pill">Kategori 6</a>
                        </div>
                        {{-- Kategori 6 : End --}}

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
