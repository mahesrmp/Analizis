@extends('layout')

@section('title', 'Beranda - AnalyZis')

@section('content')

<section class="hero">
    <div class="container text-center">
        <h1>Temukan Keterampilan IT yang Paling Dicari</h1>
        <p>Tingkatkan daya saing Anda dengan rekomendasi pelatihan berbasis data.</p>
        <a href="#" class="btn btn-light btn-lg">Mulai Sekarang</a>
        <a href="#" class="btn btn-outline-light btn-lg ms-2">Eksplorasi Tren</a>
    </div>
</section>

<section class="container text-center my-5">
    <h2 class="mb-4">Mengapa Memilih AnalyZis?</h2>
    <div class="row">
        <div class="col-md-3">
            <i class="fas fa-chart-line feature-icon"></i>
            <h4>Analisis Tren</h4>
            <p>Data real-time tentang keterampilan yang paling diminati.</p>
        </div>
        <div class="col-md-3">
            <i class="fas fa-graduation-cap feature-icon"></i>
            <h4>Rekomendasi Pelatihan</h4>
            <p>Pelatihan berbasis data sesuai kebutuhan industri.</p>
        </div>
        <div class="col-md-3">
            <i class="fas fa-user-cog feature-icon"></i>
            <h4>Dashboard Interaktif</h4>
            <p>Pantau perkembangan keterampilan dan peluang kerja Anda.</p>
        </div>
        <div class="col-md-3">
            <i class="fas fa-file-alt feature-icon"></i>
            <h4>Laporan Keterampilan</h4>
            <p>Akses laporan industri dan tren tenaga kerja terkini.</p>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-4">Mitra & Pengguna Kami</h2>
        <div class="row">
            @foreach($testimonials as $testimonial)
                <div class="col-md-4">
                    <img src="{{ $testimonial['image'] }}" class="img-fluid rounded-circle" alt="Partner">
                    <p class="mt-3">{{ $testimonial['quote'] }}</p>
                    <p><strong>- {{ $testimonial['name'] }}, {{ $testimonial['role'] }}</strong></p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
