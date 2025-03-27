@extends('layout')

@section('title', 'Daftar Course - AnalyZis')

@section('content')

<section class="carousel-section">
    <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="position-relative" style="background-color: #1e3a8a; min-height: 80vh;">
                    <!-- Background image with overlay -->
                    <div class="position-absolute top-0 start-0 w-100 h-100">
                        <img src="https://storage.googleapis.com/a1aa/image/X89vXFnc3Jrk9uaLRxN25_iX2uVSws0zS4jOytwH1p8.jpg" 
                             class="w-100 h-100 object-fit-cover opacity-25" alt="Background Illustration">
                    </div>
                    
                    <!-- Content -->
                    <div class="container position-relative text-white py-5 d-flex align-items-center justify-content-center" style="min-height: 80vh;">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
                                    <!-- Left side with text -->
                                    <div class="text-center text-md-start">
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-3">
                                            <!-- SVG elements replacing the images -->
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25" cy="25" r="25" fill="#4A8DF2"/>
                                                <path d="M25 15C20.5817 15 17 18.5817 17 23C17 25.3967 18.1479 27.5316 19.9375 28.9062C16.6079 30.4357 14.3398 33.5182 14.0312 37.125C13.9896 37.6045 14.3955 38 14.875 38H35.125C35.6045 38 36.0104 37.6045 35.9688 37.125C35.6602 33.5182 33.3921 30.4357 30.0625 28.9062C31.8521 27.5316 33 25.3967 33 23C33 18.5817 29.4183 15 25 15Z" fill="white"/>
                                            </svg>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25" cy="25" r="25" fill="#4373BE"/>
                                                <path d="M25 15C20.5817 15 17 18.5817 17 23C17 25.3967 18.1479 27.5316 19.9375 28.9062C16.6079 30.4357 14.3398 33.5182 14.0312 37.125C13.9896 37.6045 14.3955 38 14.875 38H35.125C35.6045 38 36.0104 37.6045 35.9688 37.125C35.6602 33.5182 33.3921 30.4357 30.0625 28.9062C31.8521 27.5316 33 25.3967 33 23C33 18.5817 29.4183 15 25 15Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <h1 class="fw-bold display-4">ONLINE COURSES</h1>
                                        <p class="lead">Dapatkan berbagai promosi kursus online yang<br>
                                        menarik untuk mengasah karir Skill anda!</p>
                                        <a href="{{ route('promotion') }}" class="btn btn-warning text-dark fw-bold rounded-pill mt-3">
                                            <i class="fas fa-book-open"></i> READ MORE
                                        </a>
                                    </div>
                                    
                                    <!-- Right side with SVG elements -->
                                    <div class="d-flex align-items-center gap-3 mt-4 mt-md-0">
                                        <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="150" height="150" rx="15" fill="#F9F9F9"/>
                                            <path d="M75 30C61.7452 30 51 40.7452 51 54C51 61.1901 54.4436 67.5949 59.8125 71.7188C49.8237 76.3071 43.0195 86.5547 42.0938 98.375C41.9688 99.8135 43.1865 101 44.625 101H105.375C106.814 101 108.031 99.8135 107.906 98.375C106.98 86.5547 100.176 76.3071 90.1875 71.7188C95.5564 67.5949 99 61.1901 99 54C99 40.7452 88.2548 30 75 30Z" fill="#4A8DF2"/>
                                        </svg>
                                        <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="150" height="150" rx="15" fill="#F9F9F9"/>
                                            <path d="M75 30C61.7452 30 51 40.7452 51 54C51 61.1901 54.4436 67.5949 59.8125 71.7188C49.8237 76.3071 43.0195 86.5547 42.0938 98.375C41.9688 99.8135 43.1865 101 44.625 101H105.375C106.814 101 108.031 99.8135 107.906 98.375C106.98 86.5547 100.176 76.3071 90.1875 71.7188C95.5564 67.5949 99 61.1901 99 54C99 40.7452 88.2548 30 75 30Z" fill="#4373BE"/>
                                        </svg>
                                        <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="150" height="150" rx="15" fill="#F9F9F9"/>
                                            <path d="M75 30C61.7452 30 51 40.7452 51 54C51 61.1901 54.4436 67.5949 59.8125 71.7188C49.8237 76.3071 43.0195 86.5547 42.0938 98.375C41.9688 99.8135 43.1865 101 44.625 101H105.375C106.814 101 108.031 99.8135 107.906 98.375C106.98 86.5547 100.176 76.3071 90.1875 71.7188C95.5564 67.5949 99 61.1901 99 54C99 40.7452 88.2548 30 75 30Z" fill="#55EEFF"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- You can add more carousel items here following the same structure -->
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
