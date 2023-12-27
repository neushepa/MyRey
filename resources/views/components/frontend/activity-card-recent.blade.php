{{-- PHP Testing Variable : Start --}}
@php

    class Activity
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

    $activities = [
        new Activity('Aktivitas 1', 'Berenang.jpg', '5 hari yang lalu'), 
        new Activity('Aktivitas 2', 'Gunung.jpg', '5 hari yang lalu'), 
        new Activity('Aktivitas 3', 'Gadget.jpg', '3 hari yang lalu'),
        new Activity('Aktivitas 4', 'Gadget.jpg', '1 hari yang lalu'),
    ];

@endphp
{{-- PHP Testing Variable : End --}}

{{-- Recent Activity : Start --}}
<div class="container-fluid mt-5 py-3">
    <div class="row">

        {{-- Title : Start --}}
        <div class="col-12 mb-3">
            <div class="container-fluid">
                <h1 class="text-inter fw-bold text-header-pink">Aktivitas Terbaru</h1>
            </div>
        </div>
        {{-- Title : End --}}

        {{-- Cards : Start --}}
        <div class="col-12">
            <div class="row">
                @foreach ($activities as $activity)
                <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-center text-inter mt-3">
                    <div class="card border-0 shadow-sm card-recent-activity">
                        <img src="{{ asset('images/article/' . $activity->image) }}" class="img-fluid" alt="..." style="border-top-right-radius: 20px; border-top-left-radius: 20px; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">{{ $activity->title }}</h3>
                            <small class="text-muted d-block">{{ $activity->date }}</small>
                            <div class="d-grid gap-2">
                                <a href="#" class="mt-3 btn btn-pink-custom fw-bold">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- Cards : End --}}

        {{-- Button : Start --}}
        <div class="col-12 mt-3">
            <div class="d-grid gap-2">
                <a href="#" class="btn btn-pink-custom fw-bold" style="padding: 0 -10%;">Seluruh Aktivitas</a>
            </div>
        </div>
        {{-- Button : End --}}

    </div>
</div>
{{-- Recent Activity : End --}}
