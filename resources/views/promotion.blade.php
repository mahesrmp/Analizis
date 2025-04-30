@extends('layout')

@section('title', 'Promosi - AnalyZis')

@section('styles')
@section('styles')
<link rel="stylesheet" href="{{ asset('resources/css/promotion-custom.css') }}">
@endsection


@endsection


@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Promosi dan Penawaran Khusus</h1>
        <p class="lead">Temukan penawaran terbaik untuk meningkatkan keterampilan IT Anda.</p>
    </div>
</section>

<!-- Filter Section -->
<div class="container my-4">
    <div class="card p-4 filter-section">
        <h4 class="mb-3 fw-bold">Filter Promosi</h4>
        <form id="filterForm" method="GET">
            <div class="row g-3">
                <div class="col-md-3">
                    <select class="form-select" id="categoryFilter">
                        <option value="all">Semua Program</option>
                        <option value="fullstack">Full Stack Development</option>
                        <option value="datascience">Data Science & AI</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="devops">DevOps & Cloud</option>
                        <option value="mobile">Mobile Development</option>
                        <option value="digital">Digital Marketing</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="priceFilter">
                        <option value="all">Semua Harga</option>
                        <option value="low">< Rp 8.000.000</option>
                        <option value="mid">Rp 8.000.000 - Rp 15.000.000</option>
                        <option value="high">> Rp 15.000.000</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="durationFilter">
                        <option value="all">Semua Durasi</option>
                        <option value="short">1-3 Bulan</option>
                        <option value="medium">4-6 Bulan</option>
                        <option value="long">6+ Bulan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary w-100 fw-bold" onclick="filterPromotions()">Tampilkan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Current Promotions -->
<div class="container">
    <div class="d-flex align-items-center justify-content-center mb-4">
        <img src="{{ asset('images/logo-2.png') }}" alt="AnalyZis Logo" height="50" class="me-3">
        <h2 class="text-center fw-bold">🎉 AnalyZis Course Picks</h2>
    </div>
    
    <div class="row" id="promotionsContainer">
        <!-- Hacktiv8 -->
        <div class="promo-card col-md-4 mb-4" data-category="fullstack" data-price="7500000" data-duration="short">
            <div class="card h-100">
                <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-danger">50% OFF</span>
                </div>
                <img src="{{ asset('images/bootcamp/hacktiv8.jpg') }}" class="card-img-top" alt="Hacktiv8">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Full-Stack JavaScript Bootcamp</h5>
                    <p class="text-muted">⏰ 3 Bulan Intensive</p>
                    <p><s class="text-muted">Rp 15.000.000</s></p>
                    <p class="text-danger fw-bold">Rp 7.500.000</p>
                    <a href="https://www.hacktiv8.com" target="_blank" class="btn btn-info text-white w-100 fw-bold">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Purwadhika -->
        <div class="promo-card col-md-4 mb-4" data-category="datascience" data-price="12600000" data-duration="medium">
            <div class="card h-100">
                <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-warning">30% OFF</span>
                </div>
                <img src="{{ asset('images/bootcamp/purwadhika.jpg') }}" class="card-img-top" alt="Purwadhika">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Data Science & AI Bootcamp</h5>
                    <p class="text-muted">⏰ 4 Bulan Intensive</p>
                    <p><s class="text-muted">Rp 18.000.000</s></p>
                    <p class="text-danger fw-bold">Rp 12.600.000</p>
                    <a href="https://purwadhika.com" target="_blank" class="btn btn-info text-white w-100 fw-bold">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <!-- RevoU -->
        <div class="promo-card col-md-4 mb-4" data-category="digital" data-price="9800000" data-duration="medium">
            <div class="card h-100">
                <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-info">Early Bird</span>
                </div>
                <img src="{{ asset('images/bootcamp/revou.jpg') }}" class="card-img-top" alt="RevoU">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Digital Marketing Professional</h5>
                    <p class="text-muted">⏰ 4 Bulan Part-time</p>
                    <p><s class="text-muted">Rp 14.000.000</s></p>
                    <p class="text-danger fw-bold">Rp 9.800.000</p>
                    <a href="https://revou.co" target="_blank" class="btn btn-info text-white w-100 fw-bold">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Special Offers Section -->
<div class="special-offers-section py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">💫 PROMOSI SPECIAL!</h2>
        <div class="row" id="specialOffersContainer">
            <!-- Alterra -->
            <div class="offer-card col-md-4 mb-4" data-category="devops" data-price="16500000" data-duration="long">
                <div class="card h-100">
                    <img src="{{ asset('images/bootcamp/alterra.jpg') }}" class="card-img-top" alt="Alterra">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">DevOps Engineering Program</h5>
                        <p class="text-success">✨ AWS Certification Included</p>
                        <p class="text-primary">💼 Job Guarantee</p>
                        <p class="fw-bold">Rp 16.500.000</p>
                        <p class="text-muted small">Cicilan 0% hingga 12 bulan</p>
                        <a href="https://academy.alterra.id" target="_blank" class="btn btn-success w-100 fw-bold">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Binar -->
            <div class="offer-card col-md-4 mb-4" data-category="mobile" data-price="11200000" data-duration="medium">
                <div class="card h-100">
                    <img src="{{ asset('images/bootcamp/binar.jpg') }}" class="card-img-top" alt="Binar">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Mobile App Development</h5>
                        <p class="text-success">✨ Flutter & React Native</p>
                        <p class="text-primary">🎓 Career Support</p>
                        <p class="fw-bold">Rp 11.200.000</p>
                        <p class="text-muted small">Free MacBook Rental</p>
                        <a href="https://www.binaracademy.com" target="_blank" class="btn btn-success w-100 fw-bold">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Dumbways -->
            <div class="offer-card col-md-4 mb-4" data-category="fullstack" data-price="13500000" data-duration="medium">
                <div class="card h-100">
                    <img src="{{ asset('images/bootcamp/dumbways.jpg') }}" class="card-img-top" alt="DumbWays">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Full-Stack Engineering</h5>
                        <p class="text-success">✨ MERN Stack Specialist</p>
                        <p class="text-primary">💻 1-on-1 Mentoring</p>
                        <p class="fw-bold">Rp 13.500.000</p>
                        <p class="text-muted small">Lifetime Access</p>
                        <a href="https://dumbways.id" target="_blank" class="btn btn-success w-100 fw-bold">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<div class="footer-section">
    <div class="container text-center">
        <p class="text-muted mb-0">© 2025 AnalyZis. Semua Hak Dilindungi. | Kebijakan Privasi | Syarat & Ketentuan</p>
    </div>
</div>

<script>
function filterPromotions() {
    const category = document.getElementById('categoryFilter').value;
    const price = document.getElementById('priceFilter').value;
    const duration = document.getElementById('durationFilter').value;

    const cards = document.querySelectorAll('.promo-card, .offer-card');

    cards.forEach(card => {
        let showCard = true;

        // Category filter
        if (category !== 'all' && card.dataset.category !== category) {
            showCard = false;
        }

        // Price filter
        const cardPrice = parseInt(card.dataset.price);
        if (price !== 'all') {
            if (price === 'low' && cardPrice >= 8000000) showCard = false;
            if (price === 'mid' && (cardPrice < 8000000 || cardPrice > 15000000)) showCard = false;
            if (price === 'high' && cardPrice <= 15000000) showCard = false;
        }

        // Duration filter
        if (duration !== 'all' && card.dataset.duration !== duration) {
            showCard = false;
        }

        card.style.display = showCard ? 'block' : 'none';
    });
}
</script>

@endsection
