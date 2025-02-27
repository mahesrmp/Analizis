@extends('layout')

@section('title', 'Detail Skill - ' . $skill['name'])

@section('content')

<section class="bg-blue-600 p-4 text-white text-center text-lg font-semibold">
    Detail Keterampilan - {{ $skill['name'] }}
</section>

<div class="container mx-auto mt-6 p-4">
    <div class="bg-white p-6 rounded-lg shadow-md" style="padding: 2%">
        <h2 class="text-2xl font-semibold">{{ $skill['name'] }}</h2>
        <p class="text-gray-600 mt-2">{{ $skill['description'] }}</p>

        <div class="mt-4">
            <h3 class="section-title">📊 Statistik Tren</h3>
            <canvas id="trendChart" class="mt-2"></canvas>
        </div>

        <div class="mt-4">
            <h3 class="section-title">📚 Bootcamp Terkait</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                @foreach ($skill['bootcamps'] as $bootcamp)
                    <a href="{{ $bootcamp['url'] }}" class="block text-black no-underline">
                        <div class="card">
                            <p>{{ $bootcamp['name'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="mt-4">
            <h3 class="section-title">💼 Rekomendasi Kursus</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                @foreach ($skill['courses'] as $course)
                    <a href="#" class="block text-black no-underline">
                        <div class="card">
                            <p>{{ $course }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('tren_skill_role') }}" class="nav-link">⬅ Kembali ke Dashboard</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = @json($trendData['years']);
    const data = @json($trendData['values']);

    const ctx = document.getElementById('trendChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Permintaan Keterampilan {{ $skill['name'] }}',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah Permintaan'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Tahun'
                    }
                }
            }
        }
    });
</script>

@endsection
