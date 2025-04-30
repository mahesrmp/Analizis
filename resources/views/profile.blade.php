{{-- resources/views/profile.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyz.is - Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
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
                    <li><a href="#">Course Pelatihan</a></li>
                    <li><a href="#">Forum Diskusi</a></li>
                    <li><a href="#">Tentang Analyzis</a></li>
                </ul>
            </nav>
            <div class="navbar-user">
                <div class="user-avatar">
                    <span>K</span>
                </div>
                <span><b>Peles</b></span>
            </div>
        </div>
    </header>

    <main class="container main-content">
        <div class="profile-container">
            <div class="profile-card">
                <div class="data-pribadi">
                    <h3>Data Pribadi</h3>
                    <div class="profile-avatar">
                        <span>K</span>
                    </div>
                    <h2 class="profile-name"><b>Kristopeles Tambunan</b></h2>
                    <a href="#" class="view-profile-link"><b>Visibilitas profil</b></a>

                    <div class="profile-additional-info">
                        <h3>Informasi tambahan</h3>
                        <div class="info-item">
                            <i class="fas fa-globe"></i>
                            <a href="https://www.kristopelis.free/xyz">https://www.kristopeles.free/xyz</a>
                        </div>
                        <div class="info-item">
                            <i class="fab fa-linkedin"></i>
                            <span>Kristopeles Tambunan</span>
                        </div>
                        <div class="info-item">
                            <i class="fab fa-github"></i>
                            <span>kristopeles</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <span>kristopelestambunan@gmail.com</span>
                        </div>
                        <button class="add-info-button">
                            <i class="fas fa-plus"></i> Tambahkan info tambahan
                        </button>
                    </div>
                </div>
            </div>

            <div class="activities-container">
                <div class="learning-activities">
                    <h3><b>Aktivitas Belajar</b></h3>
                    <div class="course-card">
                        <h4>Kursus</h4>
                        <div class="course-item">
                            <div class="course-logo">
                                <span>Coursera</span>
                            </div>
                            <div class="course-details">
                                <h5>Introduction to Android Mobile Development</h5>
                                <p class="course-status"><a href="">Lulus (Certified)</a></p>
                                <p class="course-date">Selesai Desember 2023</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="other-activities">
                    <h3><b>Aktivitas Lain</b></h3>
                    <div class="webinar-card">
                        <h4>Webinar</h4>
                        <div class="webinar-item">
                            <div class="webinar-logo">
                                <span>Coursera</span>
                            </div>
                            <div class="webinar-details">
                                <h5>Introduction to Android Mobile Development</h5>
                                <p class="webinar-status">Peserta Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>© 2023 Analyz.is. Semua Hak Dilindungi | Kebijakan Privasi | Syarat & Ketentuan</p>
        </div>
    </footer>
</body>
</html>