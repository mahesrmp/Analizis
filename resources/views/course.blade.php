@extends('layout')

@section('title', 'Daftar Course - AnalyZis')

@section('content')

<section class="hero">
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fw-bold">Daftar Course Populer</h1>
                <p class="lead">Tingkatkan daya saing Anda dengan rekomendasi pelatihan berbasis data.</p>
                {{-- <a href="#" class="btn btn-light btn-lg">Mulai Sekarang</a>
                <a href="#" class="btn btn-outline-light btn-lg ms-2">Eksplorasi Tren</a> --}}
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card skill-card">
                    <h5 class="fw-bold">{{ $course['title'] }}</h5>
                    <p class="text-muted">{{ $course['description'] }}</p>
                    <a href="{{ $course['link'] }}" class="btn btn-primary btn-sm mt-2">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection