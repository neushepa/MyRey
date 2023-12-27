{{-- PHP Testing Variable : Start --}}
@php

    class Educational
    {
        public $school;
        public $startYear;
        public $endYear;

        public function __construct($school, $startYear, $endYear)
        {
            $this->school = $school;
            $this->startYear = $startYear;
            $this->endYear = $endYear;
        }
    }

    $edus = [
        new Educational('SDN Mawar Bodas', '2010', '2015'), 
        new Educational('SMP Cieumbeuleuit 5', '2010', '2015'), 
        new Educational('SMK Raden Umar Said', '2010', '2015'), 
        new Educational('Harvard College', '2010', '2015'), 
    ];

@endphp
{{-- PHP Testing Variable : End --}}

{{-- About Me : Start --}}
<div class="container-fluid mt-5 py-3 simple-about text-white">
    <div class="row my-3">

        {{-- Text : Start --}}
        <div class="col-12 mb-3">
            <div class="container-fluid">
                <div class="row text-inter">
                    <div class="col-12 my-2">
                        <h1 class="fw-bold">Riwayat Pendidikan</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Text : End --}}

        {{-- Vertical Timeline : Start --}}
        <div class="col-12">
            <div class="container-fluid">
                <section class="py-5">
                    <ul class="timeline">
                        @foreach ($edus as $edu)
                        <li class="timeline-item mb-5">
                            <h5 class="fw-bold">{{ $edu->school }}</h5>
                            <p class="mb-2 fw-bold">{{ $edu->startYear }} - {{ $edu->endYear }}</p>
                        </li>
                        @endforeach
                    </ul>
                </section>
            </div>
        </div>
        {{-- Vertical Timeline : End --}}

    </div>
</div>
{{-- About Me : End --}}
