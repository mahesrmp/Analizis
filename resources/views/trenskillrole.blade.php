@extends('layout')

@section('title', 'Tren Skill & Role')

@section('content')
    <img src="{{ asset('images/navskillrole.png') }}" alt="" style="width: 100%; height: auto;">

    <section class="search-section">
        <div class="container">
            <div class="search-card">
                <h2>Fitur Pencarian</h2>
                <div class="search-form">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Semua Posisi</option>
                            <option>Developer</option>
                            <option>Data Scientist</option>
                            <option>UI/UX Designer</option>
                            <option>Cybersecurity Specialist</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Pilih Tahun</option>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                        </select>
                    </div>
                    <button class="search-button">Cari dan Temukan</button>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <div class="container">
            <h2>Yuk, temukan tren skill terbaru dan siapkan karirmu dengan AnalyZis!</h2>

            <div class="info-card">
                <div class="info-text">
                    <h3>Mengapa Harus Mengikuti Tren Skill di Industri?</h3>
                    <p>Di era digital yang terus berkembang, keterampilan yang relevan menjadi kunci utama dalam membangun
                        karier yang sukses. Dengan memahami tren skill di industri, Anda dapat menyesuaikan diri dengan
                        kebutuhan pasar kerja, meningkatkan daya saing, dan membuka lebih banyak peluang karier.</p>
                    <p><strong>AnalyZis</strong> hadir untuk membantu Anda mengidentifikasi keterampilan yang sedang
                        diminati dan memberikan wawasan berbasis data agar Anda selalu selangkah lebih maju!</p>
                </div>
                <div class="info-image">
                    <img src="{{ asset('images/trenskill.png') }}" alt="Career Illustration">
                </div>
            </div>
        </div>
    </section>

    <section class="trending-jobs">
        <div class="container">
            <h2>Tren Keterampilan Populer</h2>
            <p class="section-subtitle">Skill yang Sedang Tren di Industri Teknologi</p>

            <div class="job-cards">
                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/cloud.png') }}" alt="Cloud Computing">
                    </div>
                    <h3>Cloud Computing</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>5,200+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: AWS, Google Cloud, Azure</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 15-25 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>

                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/data.png') }}" alt="Data Science">
                    </div>
                    <h3>Data Science</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>6,800+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: Python, SQL, TensorFlow</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 18-30 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>

                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/cyber.png') }}" alt="Cybersecurity">
                    </div>
                    <h3>Cybersecurity</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>4,500+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: Ethical Hacking, SOC, Firewall</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 20-35 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>

                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/uiux.png') }}" alt="UI/UX Design">
                    </div>
                    <h3>UI/UX Design</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>3,800+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: Figma, Adobe XD, Sketch</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 12-20 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>


    <section class="trending-jobs">
        <div class="container">
            <h2>Tren Pekerjaan Populer</h2>
            <p class="section-subtitle">Pekerjaan yang Sedang Tren di Industri Teknologi</p>

            <div class="job-cards">
                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/frontend.png') }}" alt="Cloud Computing">
                    </div>
                    <h3>Front-end Development</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>5,200+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: AWS, Google Cloud, Azure</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 15-25 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>

                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/dataanalys.png') }}" alt="Data Science">
                    </div>
                    <h3>Data Analysis</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>6,800+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: Python, SQL, TensorFlow</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 18-30 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>

                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/backend.png') }}" alt="Cybersecurity">
                    </div>
                    <h3>Back-end Development</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>4,500+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: Ethical Hacking, SOC, Firewall</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 20-35 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>

                <div class="job-card">
                    <div class="job-icon">
                        <img src="{{ asset('images/aiml.png') }}" alt="UI/UX Design">
                    </div>
                    <h3>AI & Machine Learning</h3>
                    <div class="job-stats">
                        <div class="stat">
                            <i class="fas fa-briefcase"></i>
                            <span>3,800+ Lowongan</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-code"></i>
                            <span>Skill: Figma, Adobe XD, Sketch</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Rp 12-20 juta/bulan</span>
                        </div>
                    </div>
                    <a href="#" class="job-link">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
@endsection
