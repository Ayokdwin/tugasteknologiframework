@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
<section class="py-4 py-lg-5">
    <div class="mb-4">
        <div>
            <span class="text-primary fw-semibold small">DATA AKADEMIK</span>
            <h1 class="display-6 fw-bold mt-2 mb-2">Edit Mahasiswa</h1>
            <p class="text-secondary mb-0">Formulir untuk mengedit data mahasiswa.</p>
        </div>
    </div>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="card border-0 shadow-sm p-3 p-md-4">
        @csrf
        @method('PUT')
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
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" maxlength="255" required>
            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" maxlength="20" required>
            @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" maxlength="100" required>
            @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun Angkatan</label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun', $mahasiswa->tahun) }}" min="1900" max="{{ date('Y') }}" required>
            @error('tahun')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="4" maxlength="255">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
            @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </form>
</section>
@endsection
