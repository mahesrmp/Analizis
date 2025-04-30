{{-- resources/views/homepage.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyz.is - Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/homepage-style.css') }}">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <img src="{{ asset('logo-1.png') }}" alt="Analyz.is Logo">
            </div>
            <nav class="navbar-menu">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tren Skill & Role</a></li>
                    <li><a href="#" class="active">Course Pelatihan</a></li>
                    <li><a href="#">Forum Diskusi</a></li>
                    <li><a href="#">Tentang Analyz.is</a></li>
                </ul>
            </nav>
            <div class="masuk-btn">
                <a href="#" class="btn-primary">Masuk</a>
            </div>
        </div>
    </header>
    <img src="{{ asset('dashboard.png') }}" alt="" style="width: 100%; height: auto;">
    <section class="about">
        <div class="container">
            <div class="about-logo">
                <img src="{{ asset('logo-2.png') }}" alt="Analyz.is Logo Colors">
            </div>
            <div class="about-content">
                <h2>AnalyZis</h2>
                <p>AnalyZis adalah platform berbasis data yang membantu Anda melakukan skill forecasting dan peran yang
                    sedang trending di Indonesia. Dengan analisa mendalam dari berbagai sumber terpercaya, AnalyZis
                    memberikan wawasan tentang skill yang paling dibutuhkan di industri saat ini, sehingga Anda bisa
                    mempersiapkan karier dengan lebih terarah.</p>
                <p>Dengan akses ke basis data komprehensif, penuh karya yang telah menganalisa secara mendalam dari
                    paper, maupun perusahaan yang memiliki talenta terbaik, <strong>AnalyZis</strong> hadir untuk
                    membantu Anda untuk lebih mudah membuat keputusan dan mengisi industri terbaik sesuai skill.
                    <strong>AnalyZis</strong> adalah pilihan.
                </p>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Tren & Skill</h3>
                <p>Terus Seimbang Lebih Maju. Dapatkan wawasan terbaru tentang tren pekerjaan dan skill yang dibutuhkan
                    di industri & sekarang.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Kursus (Course)</h3>
                <p>Tingkatkan Kemampuan Anda. Akses berbagai kursus online yang disesuaikan dengan tren karier terbaru
                    dan keterampilan yang relevan untuk meningkatkan daya saing Anda di pasar kerja yang semakin peluang
                    karier.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Form Diskusi</h3>
                <p>Sampaikan Pendapat & Pertanyaan Anda. Berinteraksi dalam forum diskusi Analyz.is untuk berbagi
                    pengalaman, tips, atau feedback bersama sesama karir.</p>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-image">
                <img src="{{ asset('people.png') }}" alt="People working together">
            </div>
            <div class="cta-content">
                <h2>Jangan Ketinggalan! Pelajari Skill yang Sedang Tren & Raih Karier Impianmu.</h2>
                <a href="#" class="btn-primary">Lihat Tren Skill & Role Sekarang</a>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="testimonial-quote">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="testimonial-title">
                <h2>Terhubung dengan Anggota Lain</h2>
                <p>Temukan chat pengalaman terbaik dan mengesankan dari sesama Anda berkembang di dunia AnalyZis.</p>
            </div>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <img src="{{ asset('testi1.png') }}" alt="Testimonial Person">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <h4>Charles Scott</h4>
                </div>
                <div class="testimonial-card">
                    <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Testimonial Person">
                    <p>Facilisis volutpat est velit egestas dui id ornare arcu odio ut. Gravida quis blandit turpis
                        cursus in hac habitasse platea.</p>
                    <h4>James Peterson</h4>
                </div>
                <div class="testimonial-card">
                    <img src="{{ asset('images/testimonial-3.jpg') }}" alt="Testimonial Person">
                    <p>Nullam vehicula ipsum a arcu cursus vitae congue. Nunc sed augue lacus viverra vitae congue eu
                        consequat ac.</p>
                    <h4>Amelia Murphy</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="promo-badge">
        <img src="{{ asset('promo.png') }}" alt="promo">
        <span>03:56:30</span>
    </div>

    <footer>
        <div class="container">
            <p>© 2023 Analyz.is. Semua Hak Dilindungi | Kebijakan Privasi | Syarat & Ketentuan</p>
        </div>
    </footer>
</body>

</html>
