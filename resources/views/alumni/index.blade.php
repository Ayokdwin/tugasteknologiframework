@extends('layouts.app')

@section('title', 'Alumni')

@section('content')
<section class="py-4 py-lg-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
        <div>
            <span class="text-primary fw-semibold small">DATA AKADEMIK</span>
            <h1 class="display-6 fw-bold mt-2 mb-2">Daftar Alumni</h1>
            <p class="text-secondary mb-0">Informasi alumni Program Studi Sistem Informasi.</p>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="badge text-bg-light border text-dark">{{ $alumni->count() }} alumni</span>
            <a href="{{ route('alumni.create') }}" class="btn btn-primary">Tambah Alumni</a>
            <a href="{{ route('ulasan.create') }}" class="btn btn-primary">Tambah Ulasan</a>
        </div>
    </div>
    <div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    @if ($alumni->isEmpty())
        <div class="card border-0 shadow-sm text-center py-5">
            <div class="card-body">
                <div class="display-5 text-primary mb-3" aria-hidden="true">⌕</div>
                <h2 class="h5 fw-bold">Belum ada data alumni</h2>
                <p class="text-secondary mb-0">Data alumni akan ditampilkan di halaman ini setelah tersedia.</p>
            </div>
        </div>
    @else
        <div class="row g-3">
            @foreach ($alumni as $alum)
                <div class="col-sm-6 col-xl-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="avatar-circle" aria-hidden="true">{{ \Illuminate\Support\Str::substr($alum->nama, 0, 1) }}</span>
                                
                                <span class="badge rounded-pill text-bg-light border">Angkatan {{ $alum->tahun_lulus }}</span>
                            </div>
                            <h2 class="h5 fw-bold mb-1">{{ $alum->nama }}</h2>
                            <p class="text-primary mb-3">{{ $alum->jurusan }}</p>
                            <dl class="mb-0 small">
                                <div class="d-flex gap-2 mb-2"><dt class="text-secondary fw-normal">NIM</dt><dd class="mb-0 fw-semibold">{{ $alum->nim }}</dd></div>
                                <div>
                                    <dt class="text-secondary fw-normal">Pekerjaan</dt><dd class="mb-0">{{ $alum->pekerjaan ?? 'Belum diisi' }}</dd>
                                    <a href="{{ route('alumni.edit', $alum->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('alumni.destroy', $alum->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </div>
                            </dl>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    @endif
</section>
@endsection
               