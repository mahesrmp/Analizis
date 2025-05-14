@extends('layout')

@section('content')
    <img src="{{ asset('images/navcourse.png') }}" alt="" style="width: 100%; height: auto;">

    <!-- Partners Section -->
    <div class="partners-section">
        <div class="container">
            <h2>Tingkatkan Skill IT mu dengan Kursus Terbaik dari Mitra Terpercaya!</h2>
            <div class="partners-logo">
                <img src="{{ asset('images/coursera.png') }}" alt="Coursera">
                <img src="{{ asset('images/myskill.png') }}" alt="American Express">
                <img src="{{ asset('images/udemy.png') }}" alt="Udemy">
                <img src="{{ asset('images/qubisa.png') }}" alt="Oschool">
                <img src="{{ asset('images/revo.png') }}" alt="Dicoding">
                <img src="{{ asset('images/glints.png') }}" alt="Cornell">
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="container">
            <h2>Investasikan Karier Anda dengan AnalyZe</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="50" viewBox="0 0 60 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="60" height="50" fill="url(#pattern0_181_942)" />
                            <defs>
                                <pattern id="pattern0_181_942" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_181_942"
                                        transform="matrix(0.00925926 0 0 0.0111111 0.0833333 0)" />
                                </pattern>
                                <image id="image0_181_942" width="90" height="90" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>

                    </div>
                    <h3>Temukan Tingkat Work Life Balance</h3>
                    <p>Dapatkan laporan lengkap dari hasil kuisioner pencarian potensi dari para ahli yang akurat dan
                        terpercaya</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="50" viewBox="0 0 60 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="60" height="50" fill="url(#pattern0_181_940)" />
                            <defs>
                                <pattern id="pattern0_181_940" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_181_940"
                                        transform="matrix(0.00925926 0 0 0.0111111 0.0833333 0)" />
                                </pattern>
                                <image id="image0_181_940" width="90" height="90" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>

                    </div>
                    <h3>Dapatkan Rekomendasi Karir</h3>
                    <p>Dapatkan Informasi Lowongan karir dan rekomendasi yang sesuai dengan potensi diri kamu</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="60" height="50" viewBox="0 0 60 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="60" height="50" fill="url(#pattern0_181_941)" />
                            <defs>
                                <pattern id="pattern0_181_941" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_181_941"
                                        transform="matrix(0.00925926 0 0 0.0111111 0.0833333 0)" />
                                </pattern>
                                <image id="image0_181_941" width="90" height="90" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFR0lEQVR4nO2dWYhcRRSGa9wXFNfguMQVH1wQHZdxGKmp/6/bPeIQCNqC5EVxRcSMEY0+TcSXvIgGn3yTPAoiweASl7jHuBBXREWJgktC3CImaJJpOeT20Aw93ff2vTO15H7wP4Y+58/p07fqnqpRqqKioqKioiIctNaHAEhI2kajcbDreKJkaGjoUJLvkmyKALwtxruOKzpILmuZ3KZlruOKDgDrZxsN4HnXcUWF1vo4AP92qOj/arXaCa7jiwZjzC0dTG5V9c2u44sGAC/OZTTJF1zHFwWjo6PHz9E2ZtoHyRNdxxk81trbu5jcah+3uY4zeAC80stokhtcxxk0WuuTSO7JUNF7kyRZ5DreYAFwV4Zqbpl9p+t4g4Xk61mNJvma63iDRGt9irSEHBW9r16vD7qOOzgA3JOjmlu623XcwUHyrbxGA3jDddxBUa/XB6UV9GH0PgCnuY4/GAAs76NttHSv6/iDgW0b/H1U9Tuu4w8CrfXpJKcLVPS0tXax6zy8h+SKAia3dJ/rPLyH5PtFjQawyXUeXmOtXVywbcy0D631Wa7z8RYAD5ZgcksPuM7HW0h+VJbRAD5wnY+XkDynpLYxI631ea7z8g6SD5dpssha+5CKHRnZkvd9s1Wv1wfT6p2tT8o2GsCWTp8lLxQ6xbbgJgG4kuTLAL6bpW0kf++gUr/y9EjpVm2nnH/t4M9LJK/IZPL4+PixAH5znSADFYAdIyMjx2Sp5mtcB8vwdXWWij6Z5G4Pgm0Gql3yG5CpfRhjlpDc6UHQzcD0t3in8kDy/PRX23XwzUD0pTHmwlwmt7WRwwGs8SCJpudaOzExcZQqCoCl6SON64SanmmnMeYmVSbGmDNl+9GD5Jqe6ON5W+LLmRGSq2NeoDCDADwlbVXNN/LLeiAuagD8Za29US0ktVrtDHkRegCZ/KHskygXpK1kVT8zGAxH0/Lk1Wg0DlOukQOWsskSYRXvsNZepzwcE8g9xkV/tdnb946yBx1BK5mWViEndZXvGGMA4GcPTGvmEYDtAK5VISFHHeTlQUAmb7TWnqoCZQDAyjwD5S5ahSzCorgtgeQYgJ88rOJtxpiaiokkSRYB+MYjk7+O8iTX0P77NnzaAfwjiCeLPhc1TZ8kT0cqNkg+6drYDu1jjYqMAQA/emj0DxKbigVr7eWuTe1i9mUqFgA86trQLnpExQKAzz0wdC59qmLAGHOuB2b2kpsN/TIBcL8HRvbSChU6gexRv6kiWHbv9cDIrpIYZeZQhQqAW12byIySK99UqJBcNw/Vt2meBnnWqRCRWTQA/5T59Sa5WjaC0lt3V6ZXsZVl9K4kSY5WoUHy+hJN2CoD8rM/Y2xs7CqS35b4n7lUhYZMWJZkwDNyN+lcnyPHGGREqySjn1YhIa+FZCaiYNJ/5rm2GMANRcfU5N8HdSe17PMWTPi9flZr6ZjaxoKfbVQoFBhe3yNzIQVflMqW7PIe95l20xMqFAB830clfWWMGSorBmvtxQA+68PorUHsUcv+bh/JrZ2PR6vh4eEj029X3nnuS5XvyP5ujirenvsUUx9Ya+skf8lh9CrlO7K/mzGZDQs5GZTuu6zPWABblM/I9GWGRHbLqm5qauogByEOkLwjy4o1SZKzla/IpVE9EvjCGHOJ6zgBXNDrDCWASRXgXfzTAB5bkAM2GdFaH0Hy8S4/lP7+7YBOiwWZuQOQKE+R2btOI8YAXlW+IscQ2m8wB/BsCH/oQO+/ef25NqMlh3HlM+lCYdJaSxXg2BqAySRJLnIdS0VFRUVFRUVFhfKZ/wGqVild0S91IAAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>

                    </div>
                    <h3>Tingkatkan Skill & Karir</h3>
                    <p>Dapatkan tindak lanjut dari ahli untuk meningkatkan potensi hinga karir terbaik</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Percentage Highlight -->
    <div class="percentage-section">
        <div class="container">
            <div class="percentage-content">
                <div class="percentage-icon">
                    <img src="{{ asset('images/manfaat.png') }}" alt="Percentage Icon">
                </div>
                <div class="percentage-text">
                    <h2><span>80%</span> merasa investasi pengembangan dirinya dapat memudahkan pekerja untuk mendapatkan
                        pekerjaan yang baik ketika mengikuti pelatihan yang sesuai dengan potensi diri</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Career Path Section -->
    <div class="career-path-section">
        <div class="container career-content-wrapper">
            <div class="text-content">
                <h2>Jelajahi Potensi Karier dengan Wawasan dari AnalyZis!</h2>
                <p>Dunia kerja terus berkembang, dan memahami tren keterampilan terbaru adalah kunci untuk tetap kompetitif.
                    Dengan AnalyZis, Anda tidak hanya mendapatkan rekomendasi kursus terbaik, tetapi juga wawasan mendalam
                    tentang skill yang paling dicari oleh industri saat ini.</p>
                <div class="action-buttons">
                    <button class="btn btn-primary">Jelajahi Kursus</button>
                    <button class="btn btn-primary">Lihat Tren Skill</button>
                </div>
            </div>
            <div class="career-image">
                <img src="{{ asset('images/advisor.png') }}" alt="Career Advisor">
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="products-section">
        <div class="container">
            <div class="horizontal-layout">
                <div class="section-header">
                    <h3>Kursus Terbaik untuk Meningkatkan Karir Anda!</h3>
                    <a href="#" class="btn btn-primary">Lihat Lebih banyak</a>
                </div>
                <div class="products-grid">
                    <div class="products-card">
                        <img src="{{ asset('images/python.png') }}" alt="Python Data Science">
                        <div class="products-info">
                            <h3>Python Data Science Tutorial</h3>
                        </div>
                    </div>
                    <div class="products-card">
                        <img src="{{ asset('images/fullstack.png') }}" alt="Full Stack Developer">
                        <div class="products-info">
                            <h3>Become Full Stack Developer</h3>
                        </div>
                    </div>
                    <div class="products-card">
                        <img src="{{ asset('images/uiuxdesign.png') }}" alt="UI/UX Design">
                        <div class="products-info">
                            <h3>UI/UX Design for Beginners</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Section -->
    <div class="courses-section">
        <div class="container">
            <h2>Kursus Populer</h2>
            <div class="course-cards">
                <div class="course-card">
                    <img src="{{ asset('images/course1.png') }}" alt="Course 1">
                    <div class="course-info">
                        <h3>Information Technology (IT) Fundamentals for Everyone</h3>
                        <h3>Udemy</h3>
                        <div class="course-meta">
                            <span class="course-type">Course</span>
                            <span class="course-students">490ribu peserta</span>
                        </div>
                        <button class="btn btn-outline">Lihat Detail</button>
                    </div>
                </div>
                <div class="course-card">
                    <img src="{{ asset('images/course2.png') }}" alt="Course 2">
                    <div class="course-info">
                        <h3>Google IT Support</h3>
                        <h3>Udemy</h3>
                        <div class="course-meta">
                            <span class="course-type">Specialization</span>
                            <span class="course-students">120ribu peserta</span>
                        </div>
                        <button class="btn btn-outline">Lihat Detail</button>
                    </div>
                </div>
                <div class="course-card">
                    <img src="{{ asset('images/course3.png') }}" alt="Course 3">
                    <div class="course-info">
                        <h3>IBM IT Support</h3>
                        <h3>Revol</h3>
                        <div class="course-meta">
                            <span class="course-type">Course</span>
                            <span class="course-students">490ribu peserta</span>
                        </div>
                        <button class="btn btn-outline">Lihat Detail</button>
                    </div>
                </div>
                <div class="course-card">
                    <img src="{{ asset('images/course4.png') }}" alt="Course 4">
                    <div class="course-info">
                        <h3>Information Technology (IT) and Cloud Fundamental</h3>
                        <h3>MySkill</h3>
                        <div class="course-meta">
                            <span class="course-type">Course</span>
                            <span class="course-students">490ribu peserta</span>
                        </div>
                        <button class="btn btn-outline">Lihat Detail</button>
                    </div>
                </div>
                <div class="course-card">
                    <img src="{{ asset('images/course5.png') }}" alt="Course 5">
                    <div class="course-info">
                        <h3>Applied Data Science</h3>
                        <h3>MySkill</h3>
                        <div class="course-meta">
                            <span class="course-type">Course</span>
                            <span class="course-students">490ribu peserta</span>
                        </div>
                        <button class="btn btn-outline">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Layanan (What We Offer)</h3>
                    <ul>
                        <li><a href="#">Kursus & Pelatihan IT</a></li>
                        <li><a href="#">Insight Tren Skill & Role Pekerjaan</a></li>
                        <li><a href="#">Sertifikasi Profesional</a></li>
                        <li><a href="#">Webinar & Event</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Mitra Kursus</h3>
                    <ul>
                        <li><a href="#">Coursera</a></li>
                        <li><a href="#">Udemy</a></li>
                        <li><a href="#">MySkill</a></li>
                        <li><a href="#">QuBisa</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>AnalyZis</h3>
                    <ul>
                        <li><a href="#">AnalyZis adalah platform analisis tren skill & role pekerjaan yang membantu
                                kamu menemukan kursus terbaik dan mengembangkan karier di bidang IT.</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Hubungi Kami</h3>
                    <p>support@analyze.id</p>
                    <p>+62 812-3456-7890</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
