@extends('layout')

@section('title', 'Tren Keterampilan & Role - AnalyZis')

@section('content')

    <section class="hero">
        <div class="container text-center">
            <h1>Tren Keterampilan & Role di Industri IT</h1>
            <p>Temukan keterampilan yang paling diminati dan peran yang berkembang pesat di industri.</p>
        </div>
    </section>

    <div class="container my-4">
        <div class="card p-4">
            <h4 class="mb-3">Filter Pencarian</h4>
            <div class="row">
                <div class="col-md-4">
                    <select class="form-select">
                        <option selected>Pilih Tahun</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                    </select>
                </div>
                {{-- <div class="col-md-4">
                    <select class="form-select">
                        <option selected>Pilih Kategori</option>
                        <option>Backend Development</option>
                        <option>Frontend Development</option>
                        <option>Data Science</option>
                        <option>Cybersecurity</option>
                        <option>DevOps</option>
                    </select>
                </div> --}}
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">Cari</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center my-4">🚀 Peran IT yang Sedang Naik Daun</h2>
        <div class="row">
            @foreach ($roles as $role)
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <i class="fas fa-user-tie feature-icon"></i>
                        <h5 class="mt-2">{{ $role->name }}</h5>
                        <p class="text-muted">👥 {{ $role->demand }} lowongan tersedia</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center my-4">🔥 Keterampilan Paling Dicari</h2>
        <div class="row">
            @foreach ($skills as $key => $skill)
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <a href="{{ route('skill.detail', $key) }}" class="block text-black no-underline">
                            <h3 class="text-lg font-semibold">{{ $skill->name }}</h3>
                            <p class="text-gray-600">📈 +{{ $skill->growth }}% peningkatan permintaan</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
