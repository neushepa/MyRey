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
                        <a class="nav-link active fw-bold" href="{{ route('profile.index') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="{{ route('activity.index') }}">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="{{ route('article.index') }}">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        
                        {{-- Checking if user authenticated : Start --}}
                        @if (Auth::check())
                            <a class="nav-link active fw-bold" href="/admin/dashboard">Dashboard</a>
                        @else
                            <a class="nav-link active fw-bold" href="{{ route('login') }}">Login</a>
                        @endif
                        {{-- Checking if user authenticated : End --}}

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
