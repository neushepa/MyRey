{{-- PHP Variable : Start --}}
@php
    $url = Route::current()->getName();
    $explodedTitle = explode(' ', $title);
@endphp
{{-- PHP Variable : End --}}

{{-- About Me : Start --}}
<div class="container-fluid mt-5 py-3">
    <div class="row my-3">

        {{-- Text : Start --}}
        <div class="col-12">
            <div class="container-fluid">
                <div class="row text-inter">
                    <div class="col-12 my-2">
                        @if (str_contains($url, 'category'))
                            <h1 class="fw-bold text-header-pink">Kategori artikel : {{ $explodedTitle[2] }}</h1>
                        @else
                            <h1 class="fw-bold text-header-pink">Artikel</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- Text : End --}}

        {{-- Input Text and open modal : Start --}}
        <div class="col-12">
            <div class="container-fluid">
                <div class="row">

                    {{-- Search bar : Start --}}
                    <div class="col-lg-9 col-md-12 mb-3">
                        <div class="input-group mb-3 border-dark border-2">
                            <input type="text" class="form-control input-custom rounded-end rounded-pill"
                                placeholder="Cari Aktivitas Berdasarkan Judul">
                            <button class="btn btn-outline-secondary rounded-start rounded-pill" type="button"
                                id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                    {{-- Search bar : End --}}

                    @if (str_contains($url, 'category'))
                        {{-- Button Category : Start --}}
                        <div class="col-lg-3 col-md-12">
                            <button type="button" class="btn btn-pink-custom fw-bold w-100" disabled>
                                {{ $explodedTitle[2] }}
                            </button>
                        </div>
                        {{-- Button Category : End --}}
                    @else
                        {{-- Button Category : Start --}}
                        <div class="col-lg-3 col-md-12">
                            <button type="button" class="btn btn-pink-custom fw-bold w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Cari berdasarkan kategori
                            </button>
                        </div>
                        {{-- Button Category : End --}}
                    @endif

                </div>
            </div>
        </div>
        {{-- Input Text and open modal : End --}}

        {{-- Card : Start --}}
        <div class="col-12">
            <div class="container-fluid">
                <div class="row">

                    {{-- Card 1 : Start --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center text-inter mt-3">
                        <div class="card border-0 shadow-sm card-recent-activity">
                            <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..."
                                style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Berenang bersama</h3>
                                <small class="text-muted d-block">5 hari yang lalu</small>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('article.detail', 'slug') }}"
                                        class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card 1 : End --}}

                    {{-- Card 1 : Start --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center text-inter mt-3">
                        <div class="card border-0 shadow-sm card-recent-activity">
                            <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..."
                                style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Berenang bersama</h3>
                                <small class="text-muted d-block">5 hari yang lalu</small>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('article.detail', 'slug') }}"
                                        class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card 1 : End --}}

                    {{-- Card 1 : Start --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center text-inter mt-3">
                        <div class="card border-0 shadow-sm card-recent-activity">
                            <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..."
                                style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Berenang bersama</h3>
                                <small class="text-muted d-block">5 hari yang lalu</small>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('article.detail', 'slug') }}"
                                        class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card 1 : End --}}

                    {{-- Card 1 : Start --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center text-inter mt-3">
                        <div class="card border-0 shadow-sm card-recent-activity">
                            <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..."
                                style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Berenang bersama</h3>
                                <small class="text-muted d-block">5 hari yang lalu</small>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('article.detail', 'slug') }}"
                                        class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card 1 : End --}}

                    {{-- Card 1 : Start --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center text-inter mt-3">
                        <div class="card border-0 shadow-sm card-recent-activity">
                            <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..."
                                style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Berenang bersama</h3>
                                <small class="text-muted d-block">5 hari yang lalu</small>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('article.detail', 'slug') }}"
                                        class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card 1 : End --}}

                    {{-- Card 1 : Start --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center text-inter mt-3">
                        <div class="card border-0 shadow-sm card-recent-activity">
                            <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..."
                                style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Berenang bersama</h3>
                                <small class="text-muted d-block">5 hari yang lalu</small>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('article.detail', 'slug') }}"
                                        class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Card 1 : End --}}

                </div>
            </div>
        </div>
        {{-- Card : end --}}

        {{-- Pagination : Start --}}
        <div class="col-12 mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 d-flex justify-content-evenly">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        {{-- Pagination : End --}}

    </div>
</div>
{{-- About Me : End --}}
