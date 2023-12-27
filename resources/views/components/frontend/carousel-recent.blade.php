{{-- PHP Testing Variable : Start --}}
@php

    class Post {
        public $title;
        public $image;

        public function __construct($title, $image) {
            $this->title = $title;
            $this->image = $image;
        }
    }

    $posts = [
        new Post('Post 1', 'Berenang.jpg'),
        new Post('Post 2', 'Gunung.jpg'),
        new Post('Post 3', 'Gadget.jpg'),
    ];

@endphp
{{-- PHP Testing Variable : End --}}

{{-- Carousel Recent : Start --}}
<div class="container-fluid mt-5">
    <div class="row">

        {{-- Title : Start --}}
        <div class="col-12 mb-3">
            <div class="container-fluid">
                <h1 class="text-inter fw-bold text-header-pink">Postingan Terbaru</h1>
            </div>
        </div>
        {{-- Title : End --}}

        {{-- Carousel : Start --}}
        <div class="col-12">
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius: 20px;">
                        @foreach ($posts as $item)
                        <div class="carousel-item {{ ($loop->iteration == '1') ? 'active' : '' }}">
                            <div class="carousel-slider"
                            style="
                            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/article/' . $item->image) }}');
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;
                            "
                            >
                                <div class="row d-flex align-items-center text-white h-100 text-inter">
                                    <div class="col-12" style="margin-left: 15%">
                                        <h1 class="fw-bold">{{ $item->title }}</h1>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-8 col-8 d-none d-md-block">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas quasi quae illo eveniet iusto iste aliquid, dolor nostrum ipsam facere, consequuntur doloribus quisquam repellendus distinctio vel eum molestiae, aut assumenda.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <a class="btn btn-outline-light" href="{{ route('article.detail', 'slug') }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        {{-- Carousel : End --}}

    </div>
</div>
{{-- Carousel Recent : End --}}
