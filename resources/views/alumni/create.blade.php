@extends('layouts.app')

@section('title', 'Alumni')

@section('content')
<section class="py-4 py-lg-5">
    <div class="mb-4">
        <div>
            <span class="text-primary fw-semibold small">DATA ALUMNI</span>
            <h1 class="display-6 fw-bold mt-2 mb-2">Tambah Alumni</h1>
            <p class="text-secondary mb-0">Formulir untuk menambahkan data alumni baru.</p>
        </div>
    </div>

    <form action="{{ route('alumni.store') }}" method="POST" class="card border-0 shadow-sm p-3 p-md-4">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <p class="fw-semibold mb-1">Periksa kembali data yang diisi:</p>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" maxlength="255" required>
            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}" maxlength="20" required>
            @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" maxlength="100" required>
            @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" maxlength="100" required>
            @error('pekerjaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
            <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}" min="1900" max="{{ date('Y') }}" required>
            @error('tahun_lulus')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="ulasan" class="form-label">Ulasan Alumni</label>
            <textarea class="form-control @error('ulasan') is-invalid @enderror" id="ulasan" name="ulasan" rows="4" maxlength="1000" required>{{ old('ulasan') }}</textarea>
            @error('ulasan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </form>
</section>
@endsection
