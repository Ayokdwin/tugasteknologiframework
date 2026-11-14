@extends('layouts.app')

@section('title', 'Edit Ulasan')

@section('content')
<section class="py-4 py-lg-5">
    <div class="mb-4">
        <div>
            <span class="text-primary fw-semibold small">DATA AKADEMIK</span>
            <h1 class="display-6 fw-bold mt-2 mb-2">Edit Ulasan</h1>
            <p class="text-secondary mb-0">Formulir untuk mengedit ulasan.</p>
        </div>
    </div>

    <form action="{{ route('ulasan.update', $ulasan->id) }}" method="POST" class="card border-0 shadow-sm p-3 p-md-4">
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
            <label for="alumni_id" class="form-label">Alumni</label>
            <select class="form-control @error('alumni_id') is-invalid @enderror" id="alumni_id" name="alumni_id" required>
                <option value="">Pilih Alumni</option>
                @foreach ($alumni as $item)
                    <option value="{{ $item->id }}" {{ old('alumni_id', $ulasan->alumni_id) == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('alumni_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="ulasan" class="form-label">Ulasan</label>
            <textarea class="form-control @error('ulasan') is-invalid @enderror" id="ulasan" name="ulasan" rows="4" maxlength="1000" required>{{ old('ulasan', $ulasan->ulasan) }}</textarea>
            @error('ulasan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('beranda') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </form>
</section>
@endsection
