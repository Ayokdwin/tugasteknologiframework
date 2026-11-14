<nav class="navbar navbar-expand-lg sticky-top bg-white border-bottom" aria-label="Navigasi utama">
    <div class="container py-2">
        <a href="{{ route('beranda') }}" class="navbar-brand fw-bold fs-4" aria-label="DataKu, beranda">
            U<span class="text-primary">T.</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-navigation" aria-controls="primary-navigation" aria-expanded="false" aria-label="Buka menu navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="primary-navigation">
            <div class="navbar-nav ms-auto gap-lg-2">
                <a class="nav-link @if (request()->routeIs('beranda')) active @endif" href="{{ route('beranda') }}" @if (request()->routeIs('beranda')) aria-current="page" @endif>Beranda</a>
                <a class="nav-link @if (request()->routeIs('tentang')) active @endif" href="{{ route('tentang') }}" @if (request()->routeIs('tentang')) aria-current="page" @endif>Tentang</a>
                <a class="nav-link @if (request()->routeIs('mahasiswa.*')) active @endif" href="{{ route('mahasiswa.index') }}" @if (request()->routeIs('mahasiswa.*')) aria-current="page" @endif>Mahasiswa</a>
            </div>
        </div>
    </div>
</nav>
