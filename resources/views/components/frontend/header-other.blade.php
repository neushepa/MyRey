{{-- Header : Start --}}
<div class="container-fluid header-dua">
    <div class="row">

        {{-- Navbar : Start --}}
        @include('components.molecules.navbar')
        {{-- Navbar : End --}}

        {{-- Header Text : Start --}}
        <div class="col-12 mt-3 d-flex align-items-center text-header-other">
            <div class="container-fluid text-white text-inter">
                <h1 class="fw-bold">YOUR WEBSITE</h1>

                {{-- Breadcrumb : Start --}}
                @if (str_contains($url, 'activity'))
                    @if (str_contains($url, 'detail'))
                        <p>
                            <a href="/" style="text-decoration: none; color: white">home</a> /
                            <a href="{{ route('activity.index') }}"
                                style="text-decoration: none; color: white">{{ $explodedURL[0] }}</a> /
                            {{ $title }}
                        </p>
                    @elseif (str_contains($url, 'category'))
                    <p>
                        <a href="/" style="text-decoration: none; color: white">home</a> /
                        <a href="{{ route('activity.index') }}"
                            style="text-decoration: none; color: white">{{ $explodedURL[0] }}</a> /
                        {{ $title }}
                    </p>
                    @else
                        <p>
                            <a href="/" style="text-decoration: none; color: white">home</a> /
                            {{ $explodedURL[0] }}
                        </p>
                    @endif
                @elseif (str_contains($url, 'article'))
                    @if (str_contains($url, 'detail'))
                        <p>
                            <a href="/" style="text-decoration: none; color: white">home</a> /
                            <a href="{{ route('article.index') }}"
                                style="text-decoration: none; color: white">{{ $explodedURL[0] }}</a> /
                            {{ $title }}
                        </p>
                    @else
                        <p>
                            <a href="/" style="text-decoration: none; color: white">home</a> /
                            {{ $explodedURL[0] }}
                        </p>
                    @endif
                @else
                    <p>
                        <a href="/" style="text-decoration: none; color: white">home</a> / {{ $explodedURL[0] }}
                    </p>
                @endif
                {{-- Breadcrumb : End --}}

            </div>
        </div>
        {{-- Header : Text --}}

    </div>
</div>
{{-- Header : End --}}
