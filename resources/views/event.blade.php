@extends('layout')

@section('title', 'Event - AnalyZis')

@section('content')

<section class="hero">
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fw-bold">Daftar Event Analizis</h1>
                <p class="lead">Ikuti Event Menarik yang dapat pengetahuan di bidang IT.</p>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">Event & Webinar</h1>

    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event['title'] }}</h5>
                        <p class="text-muted">{{ $event['date'] }}</p>
                        <p class="card-text">{{ $event['description'] }}</p>
                        <button class="btn btn-outline-primary w-100" 
                                data-bs-toggle="modal" 
                                data-bs-target="#eventModal{{ $loop->iteration }}">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="eventModal{{ $loop->iteration }}" tabindex="-1" 
                aria-labelledby="eventModalLabel{{ $loop->iteration }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel{{ $loop->iteration }}">
                                {{ $event['title'] }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset($event['image']) }}" class="img-fluid mb-3" alt="{{ $event['title'] }}" style="max-height: 300px; width: 100%; object-fit: cover;">
                            <p><strong>Tanggal:</strong> {{ $event['date'] }}</p>
                            <p>{{ $event['description'] }}</p>

                            <div class="mt-4">
                                <h5>Informasi Detail</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Pemateri:</strong> {{ $event['speaker'] }}</li>
                                    <li><strong>Platform:</strong> {{ $event['platform'] }}</li>
                                    <li><strong>Durasi:</strong> {{ $event['duration'] }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
