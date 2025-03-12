@extends('layout')

@section('title', 'Beranda - AnalyZis')

@section('content')

<section class="hero">
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fw-bold">Temukan Keterampilan IT yang Paling Dicari</h1>
                <p class="lead">Tingkatkan daya saing Anda dengan rekomendasi pelatihan berbasis data.</p>
                <a href="#" class="btn btn-light btn-lg">Mulai Sekarang</a>
                <a href="#" class="btn btn-outline-light btn-lg ms-2">Eksplorasi Tren</a>
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <h2 class="text-center mb-4">🚀 Mengapa Memilih AnalyZis?</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <i class="fas fa-chart-line feature-icon"></i>
                <h5 class="mt-2">Analisis Tren</h5>
                <p class="text-muted">Data real-time tentang keterampilan yang paling diminati.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <i class="fas fa-graduation-cap feature-icon"></i>
                <h5 class="mt-2">Rekomendasi Pelatihan</h5>
                <p class="text-muted">Pelatihan berbasis data sesuai kebutuhan industri.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <i class="fas fa-user-cog feature-icon"></i>
                <h5 class="mt-2">Dashboard Interaktif</h5>
                <p class="text-muted">Pantau perkembangan keterampilan dan peluang kerja Anda.</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">💬 Mitra & Pengguna Kami</h2>
    <div class="row">
        @foreach($testimonials as $testimonial)
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="80" height="80" fill="gray">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
                    </svg>
                    <p class="mt-3 px-3 text-muted">"{{ $testimonial['quote'] }}"</p>
                    <p class="fw-bold">- {{ $testimonial['name'] }}, {{ $testimonial['role'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
