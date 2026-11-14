
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero-panel rounded-4 p-4 p-md-5 my-4 my-lg-5">
    <span class="badge text-bg-primary mb-3">MENGENAL PROGRAM STUDI KAMI</span>

    <h1 class="display-4 fw-bold mb-3">Membangun Masa Depan<br><span class="text-primary">Melalui Teknologi.</span></h1>

    <p class="lead text-secondary mb-4">
        Program Studi Sistem Informasi memadukan teknologi,
        bisnis, dan inovasi untuk menciptakan solusi digital
        yang bermanfaat bagi masyarakat.
    </p>

    <div class="d-flex flex-column flex-sm-row gap-2">
        <a href="{{ route('tentang') }}" class="btn btn-primary btn-lg">
            Tentang Program Studi
        </a>

        <button type="button" class="btn btn-outline-primary btn-lg" id="infoButton">
            Kenali Kami
        </button>
    </div>
</section>

<section class="py-4 py-lg-5" id="features">
    <div class="text-center mb-4">
        <span class="text-primary fw-semibold small">KEUNGGULAN KAMI</span>
        <h2 class="display-6 fw-bold mt-2 mb-2">Belajar, Berkembang, Berinovasi</h2>
        <p class="text-secondary mb-0">Bekal untuk menghadapi tantangan dunia digital.</p>
    </div>

    <div class="row g-4">
        <x-info-card
            icon="💻"
            title="Teknologi Digital"
            description="Mempelajari pengembangan aplikasi dan pemanfaatan teknologi informasi."
        />

        <x-info-card
            icon="📊"
            title="Analisis Bisnis"
            description="Memahami proses bisnis dan merancang solusi sistem informasi."
        />
    </div>
</section>


<section class="py-4 py-lg-5" id="testimonials">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-primary fw-semibold small">ULASAN ALUMNI</span>
            <h2 class="display-6 fw-bold mt-2 mb-2">
                Cerita Sukses Lulusan Kami
            </h2>
            <p class="text-secondary mb-0">
                Pengalaman dan pencapaian alumni Program Studi Sistem Informasi.
            </p>
        </div>

        <div class="position-relative">


            <!-- Carousel Ulasan -->
            <div id="ulasanCarousel"
                class="d-flex gap-4 overflow-auto px-4 py-3"
                style="
                    scroll-behavior: smooth;
                    scrollbar-width: none;
                    scroll-snap-type: x mandatory;
                ">

                @foreach ($ulasan as $ulasanItem)
                    <div class="flex-shrink-0"
                        style="
                            width: 320px;
                            scroll-snap-align: start;
                        ">

                        <article class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">

                                <div class="d-flex justify-content-between
                                    align-items-center mb-4">

                                    <span class="avatar-circle"
                                        aria-hidden="true">
                                        {{ \Illuminate\Support\Str::substr($ulasanItem->alumni->nama ?? 'A', 0, 1) }}
                                    </span>

                                    <span class="badge rounded-pill
                                        text-bg-light border">
                                        Lulusan {{ $ulasanItem->alumni->tahun_lulus ?? 'N/A' }}
                                    </span>
                                    
                                    
                                </div>

                                <h5 class="fw-bold mb-1">
                                    {{ $ulasanItem->alumni->nama }}
                                </h5>
                                

                                <p class="text-primary small mb-3">
                                    {{ $ulasanItem->alumni->jurusan }}
                                </p>
                                <span class="badge rounded-pill
                                        text-bg-light border justify-content-center d-flex mb-3">
                                        Pekerjaan {{ $ulasanItem->alumni->pekerjaan ?? 'N/A' }}
                                    </span>

                                <hr>

                                <div class="mb-3">
                                    <small class="text-secondary fw-semibold">
                                        ULASAN ALUMNI
                                    </small>

                                    <p class="text-secondary mt-2 mb-0">
                                        "{{ $ulasanItem->ulasan }}"
                                    </p>
                                </div>

                                <div class="d-flex gap-2 mt-4">
                                    <a href="{{ route('ulasan.edit', $ulasanItem->id) }}"
                                        class="btn btn-sm btn-outline-primary">
                                        Edit
                                    </a>

                                    <form action="{{ route('ulasan.destroy', $ulasanItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </article>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="text-center mt-3">
            <small class="text-secondary">
                <i class="bi bi-arrow-left-right"></i>
                Geser untuk melihat ulasan alumni lainnya
            </small>
        </div>
    </div>
</section>



@endsection
