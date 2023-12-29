{{-- About Me : Start --}}
<div class="container-fluid mt-5 py-3">
    <div class="row my-3">

        {{-- Text : Start --}}
        <div class="col-12">
            <div class="container-fluid">
                <div class="row text-inter">
                    <div class="col-12">
                        <h1 class="fw-bold text-header-pink">Galeri</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Text : End --}}

        {{-- Gallery : Start --}}
        <div class="col-12">
            <section class="portfolio text-inter fw-bold">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters" class="d-flex justify-content-start">
                                <li data-filter="">All</li>
                                @foreach ($albums as $album)
                                    <li data-filter=".{{ $album->id }}">{{ $album->album_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
        
                    <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out"
                        data-aos-duration="500" style="position: relative; height: 3753px; wow zoomIn">
                        @foreach ($galleries as $gallery)
                            <div class="col-lg-4 col-md-6 portfolio-wrap {{ $gallery->album_id }}"
                                style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-item">
                                    <a class="popup-image" href="{{ asset('assets/gallery/' . $gallery->picture) }}"
                                        title="{{ $gallery->description }}">
                                        <img src="{{ asset('assets/gallery/' . $gallery->picture) }}" class="w-100">
                                    </a>
                                    <div class="portfolio-info">
                                        <h4>{{ $gallery->album->album_name }}</h4>
                                        <div class="portfolio-links">
                                            {{ $gallery->title }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $galleries->links() }}
                </div>
            </section>
        </div>
        {{-- Gallery : End --}}

    </div>
</div>
{{-- About Me : End --}}