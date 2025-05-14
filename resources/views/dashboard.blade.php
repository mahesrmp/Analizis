@extends('layout')


@section('title', 'Homepage')

@section('content')

    <body>
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
            <div class="container testimonials-container">
                <div class="testimonial-info">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <h2>Terhubung dengan <br><strong>Anggota Lain</strong></h2>
                    <p>
                        Temukan tren keterampilan terbaru dan rekomendasi kursus yang membantu Anda berkembang di dunia
                        kerja,
                        langsung dari <strong>AnalyZis</strong>.
                    </p>
                </div>
                <div class="testimonial-cards">
                    <div class="testimonial-card">
                        <img src="{{ asset('images/testi1.png') }}" alt="Testimonial Person">
                        <p>Dengan AnalyZis, saya lebih mudah memahami tren keterampilan terbaru dan meningkatkan kemampuan
                            saya
                            sesuai kebutuhan industri. Platform ini sangat membantu dalam merencanakan karier saya!</p>
                        <h4>John</h4>
                    </div>
                    <div class="testimonial-card">
                        <img src="{{ asset('images/people2.png') }}" alt="Testimonial Person">
                        <p>AnalyZis tidak hanya memberikan insight tentang tren skill, tetapi juga menjadi tempat berdiskusi
                            dengan para profesional lain. Saya mendapatkan banyak perspektif baru yang berguna!</p>
                        <h4>Cahyono Setiawan</h4>
                    </div>
                    <div class="testimonial-card">
                        <img src="{{ asset('images/people3.png') }}" alt="Testimonial Person">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut
                            laoreet dolore magna.</p>
                        <h4>Atalya Saragih</h4>
                    </div>
                </div>
            </div>
        </section>

        <div class="promo-badge">
            <img src="{{ asset('promo.png') }}" alt="promo">
            <span>03:56:30</span>
        </div>

    </body>

@endsection
