{{-- PHP Testing Variable : Start --}}
@php

    class ArticleDetail
    {
        public $title;
        public $image;

        public function __construct($title, $image, $date)
        {
            $this->title = $title;
            $this->image = $image;
            $this->date = $date;
        }
    }

    $detailArticle = [
        new ArticleDetail('Artikel 1', 'Berenang.jpg', '5 hari yang lalu'), 
        new ArticleDetail('Artikel 2', 'Gunung.jpg', '5 hari yang lalu'), 
        new ArticleDetail('Artikel 3', 'Gadget.jpg', '3 hari yang lalu'),
        new ArticleDetail('Artikel 4', 'Gadget.jpg', '1 hari yang lalu'),
        new ArticleDetail('Artikel 5', 'Gadget.jpg', '1 hari yang lalu'),
        new ArticleDetail('Artikel 6', 'Gadget.jpg', '1 hari yang lalu'),
    ];

@endphp
{{-- PHP Testing Variable : End --}}

{{-- About Me : Start --}}
<div class="container-fluid py-3 simple-about">
    <div class="row my-5">

        {{-- Text : Start --}}
        <div class="col-12 mb-3 text-white">
            <div class="container-fluid">
                <div class="row text-inter">
                    <div class="col-12 my-2">
                        <h1 class="fw-bold">Artikel Lainnya</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Text : End --}}

        {{-- Another Post : Start --}}
        <div class="col-12">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="container-fluid">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($detailArticle as $item)
                            <div class="carousel-item {{ ($loop->iteration == 1 ? 'active' : '') }}">
                                <div class="col-lg-3 col-md-12 col-12 d-flex justify-content-center text-inter mt-3">
                                    <div class="card border-0 shadow-sm card-recent-activity">
                                        <img src="{{ asset('images/article/Berenang.jpg') }}" class="img-fluid" alt="..." style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h3 class="card-title fw-bold">{{ $item->title }}</h3>
                                            <small class="text-muted d-block">{{ $item->date }}</small>
                                            <div class="d-grid gap-2">
                                                <a href="{{ route('activity.detail', 'slug') }}" class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="prev"">
                        <div style="background-color: #d9d9d9; width: 50px; height: 50px; border-radius: 50%; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                            <div 
                            style="
                            position:relative;
                            left:23%;
                            top:28%;
                            height:0px;
                            width:0px;
                            border-right:solid 20px #cf3774;
                            border-bottom:solid 10px transparent;
                            border-top:solid 10px transparent;"
                            ></div>
                        </div>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="next">
                        <div style="background-color: #d9d9d9; width: 50px; height: 50px; border-radius: 50%; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                            <div 
                            style="
                            position:relative;
                            left:38%;
                            top:28%;
                            height:0px;
                            width:0px;
                            border-left:solid 20px #cf3774;
                            border-bottom:solid 10px transparent;
                            border-top:solid 10px transparent;"
                            ></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- Another Post : End --}}

    </div>
</div>
{{-- About Me : End --}}
