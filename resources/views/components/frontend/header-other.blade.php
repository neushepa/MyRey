{{-- Header : Start --}}
<div class="container-fluid header-dua">
    <div class="row">

        {{-- Navbar : Start --}}
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark text-inter">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="/">YOUR WEBSITE</a>
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
        <div class="col-12 mt-3 d-flex align-items-center text-header-other">
            <div class="container-fluid text-white text-inter">
                <h1 class="fw-bold">YOUR WEBSITE</h1>
                
                {{-- Breadcrumb : Start --}}
                @if (str_contains($url, 'activity'))
                    dummy
                @elseif (str_contains($url, 'articles'))
                    dummy
                @else
                    <p>
                        <a href="/" style="text-decoration: none; color: white">home</a> / {{ $url }}
                    </p>
                @endif
                {{-- Breadcrumb : End --}}

            </div>
        </div>
        {{-- Header : Text --}}

    </div>
</div>
{{-- Header : End --}}
