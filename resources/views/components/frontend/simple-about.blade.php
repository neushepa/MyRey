{{-- About Me : Start --}}
<div class="container-fluid mt-5 py-3 simple-about">
    <div class="row my-5">

        {{-- Text : Start --}}
        <div class="col-lg-6 col-md-6 mb-3 d-flex align-items-center">
            <div class="container-fluid">
                <div class="row text-white text-inter">
                    <div class="col-12 my-2">
                        <h1 class="fw-bold">Tentang Saya</h1>
                    </div>
                    <div class="col-12 my-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fugiat eius ipsum nemo. Culpa perferendis architecto aliquam, at temporibus, iusto, qui blanditiis sed reiciendis ab fuga minus similique accusamus eaque perspiciatis cum quibusdam? Eligendi atque doloribus impedit! Illum harum ea veritatis earum voluptatum vitae ipsum, optio rerum debitis error ab?
                    </div>
                    <div class="col-12 my-2">
                        <div class="d-grid gap-2">
                            <a class="btn btn-outline-light rounded-pill" href="{{ route('profile.index') }}">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Text : End --}}

        {{-- Image : Start --}}
        <div class="col-lg-6 col-md-6 py-5">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('images/article/Gadget.jpg') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-lg-6 col-md-12 mt-4 d-none d-md-block">
                    <img src="{{ asset('images/article/Gadget.jpg') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-lg-6 col-md-12 mt-4 d-none d-md-block">
                    <img src="{{ asset('images/article/Gadget.jpg') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        {{-- Image : End --}}

    </div>
</div>
{{-- About Me : End --}}