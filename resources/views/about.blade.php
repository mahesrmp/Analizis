@extends('layout')

@section('title', 'Tentang Kami - AnalyZis')

@section('content')
    <!-- Fixed size banner image -->


    <div class="container max-w-6xl mx-auto px-4 my-12">
        <!-- About AnalyZis Section - Simplified and elegant -->
        <div class="bg-blue-50 rounded-xl p-8 mb-10 shadow-sm">
            <h2 class="text-3xl font-bold text-blue-800 mb-4">Apa itu AnalyZis?</h2>
            <p class="text-gray-700 leading-relaxed">
                AnalyZis adalah platform berbasis data yang membantu mahasiswa, pencari kerja, dan profesional IT untuk memahami tren keterampilan dan peran pekerjaan yang paling diminati di industri teknologi. Dengan menggunakan teknologi analitik terkini, kami menyajikan data real-time dari berbagai sumber lowongan kerja dan memberikan rekomendasi kursus dan jalur karier yang relevan.
            </p>
        </div>

        <!-- Two-column layout for location and contact -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Company Location Section -->
            <div class="bg-green-50 rounded-xl p-8 shadow-sm h-full">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Lokasi Perusahaan</h2>
                <p class="text-gray-700 leading-relaxed">
                    <strong class="block mb-2">PT ZIRA Tech (AnalyZis HQ)</strong>
                    Jl. Kampung Utan No. 36, Ragunan<br>
                    Pasar Minggu, Jakarta Selatan<br>
                    DKI Jakarta 12550, Indonesia
                </p>
            </div>

            <!-- Contact Us Section -->
            <div class="bg-purple-50 rounded-xl p-8 shadow-sm h-full">
                <h2 class="text-2xl font-bold text-purple-800 mb-4">Hubungi Kami</h2>
                <div class="space-y-3 text-gray-700">
                    <p class="flex items-center"><span class="text-xl mr-3">📞</span> +62 812-3456-7890</p>
                    <p class="flex items-center"><span class="text-xl mr-3">📧</span> support@analyzis.id</p>
                    <p class="flex items-center"><span class="text-xl mr-3">🌐</span> www.analyzis.id</p>
                </div>
            </div>
        </div>

        <!-- Features Section - More spacious and elegant -->
        <div class="bg-yellow-50 rounded-xl p-8 mb-12 shadow-sm">
            <h2 class="text-2xl font-bold text-yellow-800 mb-6">Apa yang Ada di AnalyZis?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start">
                    <span class="text-yellow-600 text-xl mr-3">📊</span>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Tren Skill & Role</h3>
                        <p class="text-gray-600">Lihat keterampilan yang sedang naik daun berdasarkan data lowongan kerja.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 text-xl mr-3">🎓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Kursus Pelatihan</h3>
                        <p class="text-gray-600">Akses ke berbagai kursus dari mitra terpercaya seperti Coursera, Udemy, dan lainnya.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 text-xl mr-3">💬</span>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Forum Diskusi</h3>
                        <p class="text-gray-600">Komunitas aktif untuk berdiskusi seputar pengembangan karier dan teknologi.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-yellow-600 text-xl mr-3">👤</span>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Profil & Riwayat</h3>
                        <p class="text-gray-600">Pantau aktivitas belajar, sertifikasi, dan keterampilan Anda.</p>
                    </div>
                </div>
                <div class="flex items-start md:col-span-2 lg:col-span-1">
                    <span class="text-yellow-600 text-xl mr-3">🤝</span>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-1">Mentorship</h3>
                        <p class="text-gray-600">Konsultasi langsung dengan mentor profesional di bidang IT.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section - Accordion style for cleaner look -->
        <div class="bg-red-50 rounded-xl p-8 mb-16 shadow-sm">
            <h2 class="text-2xl font-bold text-red-800 mb-6">FAQ (Pertanyaan yang Sering Diajukan)</h2>
            
            <div class="space-y-6">
                <div class="border-b border-red-100 pb-4">
                    <h3 class="font-bold text-gray-800 mb-2">Apakah AnalyZis gratis?</h3>
                    <p class="text-gray-600">Ya! Anda dapat mengakses fitur dasar secara gratis. Namun, beberapa kursus dan sesi mentorship tersedia dalam paket berbayar.</p>
                </div>
                
                <div class="border-b border-red-100 pb-4">
                    <h3 class="font-bold text-gray-800 mb-2">Apakah saya perlu membuat akun untuk menggunakan AnalyZis?</h3>
                    <p class="text-gray-600">Anda bisa menjelajahi konten umum tanpa akun, tapi untuk fitur pelatihan dan diskusi, Anda perlu mendaftar.</p>
                </div>
                
                <div class="border-b border-red-100 pb-4">
                    <h3 class="font-bold text-gray-800 mb-2">Bagaimana jika saya tidak memiliki latar belakang IT?</h3>
                    <p class="text-gray-600">AnalyZis juga cocok bagi pemula. Kami menyediakan jalur pembelajaran khusus untuk pemula yang ingin berkarier di bidang teknologi.</p>
                </div>
                
                <div>
                    <h3 class="font-bold text-gray-800 mb-2">Apakah ada sertifikat setelah menyelesaikan pelatihan?</h3>
                    <p class="text-gray-600">Ya, kursus yang diikuti melalui mitra seperti Coursera dan MySkill biasanya menyediakan sertifikat resmi.</p>
                </div>
            </div>
        </div>

        <!-- Team Section - Cleaner and more elegant -->
        <section class="mx-auto">
            <h2 class="text-3xl font-bold text-blue-800 mb-4">
                Tim Kami
            </h2>
            <p class="text-gray-500 mb-10 max-w-3xl">
                Bertemu dengan para ahli di balik AnalyZis yang berdedikasi untuk membantu Anda menavigasi dunia karier teknologi.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <article class="bg-white rounded-xl overflow-hidden text-black shadow-sm border border-gray-100 transition-transform hover:shadow-md hover:-translate-y-1">
                    <img alt="Team Member 1" class="w-full h-64 object-cover" src="{{ asset('images/about-member1.png') }}"/>
                    <div class="p-6">
                        <h3 class="font-bold text-blue-900 mb-1 text-xl">
                            Samuel Emeraldo
                        </h3>
                        <p class="text-blue-600 text-sm mb-3">
                            Senior Front-end Developer
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            Berpengalaman dalam pengembangan aplikasi web dengan fokus pada pengalaman pengguna dan antarmuka yang intuitif.
                        </p>
                        <div class="flex space-x-4 text-gray-400">
                            <a aria-label="LinkedIn" class="hover:text-blue-500 transition-colors" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a aria-label="Twitter" class="hover:text-blue-400 transition-colors" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a aria-label="GitHub" class="hover:text-gray-800 transition-colors" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="bg-white rounded-xl overflow-hidden text-black shadow-sm border border-gray-100 transition-transform hover:shadow-md hover:-translate-y-1">
                    <img alt="Team Member 2" class="w-full h-64 object-cover" src="{{ asset('images/about-member2.png') }}"/>
                    <div class="p-6">
                        <h3 class="font-bold text-blue-900 mb-1 text-xl">
                            Mahes Panjaitan
                        </h3>
                        <p class="text-blue-600 text-sm mb-3">
                            Data Scientist & Co-founder
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            Ahli dalam analisis data dan machine learning dengan fokus pada prediksi tren keterampilan di industri teknologi.
                        </p>
                        <div class="flex space-x-4 text-gray-400">
                            <a aria-label="LinkedIn" class="hover:text-blue-500 transition-colors" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a aria-label="Twitter" class="hover:text-blue-400 transition-colors" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a aria-label="GitHub" class="hover:text-gray-800 transition-colors" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="bg-white rounded-xl overflow-hidden text-black shadow-sm border border-gray-100 transition-transform hover:shadow-md hover:-translate-y-1">
                    <img alt="Team Member 3" class="w-full h-64 object-cover" src="{{ asset('images/about-member3.png') }}"/>
                    <div class="p-6">
                        <h3 class="font-bold text-blue-900 mb-1 text-xl">
                            Kristopeles Tambunan
                        </h3>
                        <p class="text-blue-600 text-sm mb-3">
                            Backend Developer
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            Spesialis dalam pengembangan sistem backend yang handal dan skalabel untuk mendukung platform analisis data.
                        </p>
                        <div class="flex space-x-4 text-gray-400">
                            <a aria-label="LinkedIn" class="hover:text-blue-500 transition-colors" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a aria-label="Twitter" class="hover:text-blue-400 transition-colors" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a aria-label="GitHub" class="hover:text-gray-800 transition-colors" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>

    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
@endsection
