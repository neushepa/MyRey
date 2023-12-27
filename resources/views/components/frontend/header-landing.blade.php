{{-- Header : Start --}}
<div class="container-fluid header-satu">
    <div class="row">

        {{-- Navbar : Start --}}
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark text-inter">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="#">YOUR WEBSITE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="#">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="#">Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        {{-- Navbar : End --}}

        {{-- Header Text : Start --}}
        <div class="col-lg-6 col-md-6 col-sm-8 col-12 mt-3 d-flex align-items-center text-header-landing">
            <div class="container text-white">
                <h1 class="text-inter fw-bold">YOUR WEBSITE</h1>
                <p>
                    Sebuah website singkat untuk menampilkan portfolio dari Drs. Udin Sucipto, M. Ag., dimana
                    swebsite ini akan berisi seluruh kegiatan yang diabadikan oleh saya pribadi, seluru artikel yang
                    sudah saya buat sampai saat ini, dan profil singkat mengenai siapa saya
                </p>
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                        <i class="fa-solid fa-envelope" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                        <i class="fa-solid fa-envelope" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                        <i class="fa-solid fa-envelope" style="font-size: 30px;"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- Header : Text --}}

    </div>
</div>
{{-- Header : End --}}
