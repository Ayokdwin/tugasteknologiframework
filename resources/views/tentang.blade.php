@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="hero-panel rounded-4 p-4 p-md-5 my-4 my-lg-5">
    <span class="badge text-bg-primary mb-3">TENTANG KAMI</span>

    <h1 class="display-5 fw-bold">Mengenal Program Studi <span class="text-primary">Sistem Informasi</span></h1>

    <p class="lead text-secondary mt-3 mb-0">
        Program Studi Sistem Informasi berfokus pada integrasi
        teknologi informasi dengan kebutuhan organisasi dan bisnis.
        Mahasiswa dibekali kemampuan analisis, pemrograman,
        pengelolaan data, dan perancangan sistem.
    </p>
</section>

<section class="row g-4 mb-5">
    <div class="col-md-6">
      <article class="card h-100 border-0 shadow-sm"><div class="card-body p-4">
        <h2 class="h4 fw-bold">Visi</h2>
        <p class="text-secondary mb-0">
            Menjadi program studi yang unggul dalam pengembangan
            sistem informasi yang inovatif dan bermanfaat.
        </p>
      </div></article>
    </div>

    <div class="col-md-6">
      <article class="card h-100 border-0 shadow-sm"><div class="card-body p-4">
        <h2 class="h4 fw-bold">Misi</h2>
        <ul class="text-secondary mb-0">
            <li>Menyelenggarakan pendidikan berkualitas.</li>
            <li>Mengembangkan penelitian di bidang sistem informasi.</li>
            <li>Mendorong pemanfaatan teknologi untuk masyarakat.</li>
        </ul>
      </div></article>
    </div>
</section>
@endsection
