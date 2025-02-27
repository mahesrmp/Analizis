<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AnalyZis')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('logo.jpeg') }}" alt="AnalyZis Logo" height="50  ">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="#">Tren Keterampilan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rekomendasi Pelatihan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Layanan Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Komunitas</a></li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <!-- UNTUK NOTIFIKASI -->
                    <div class="position-relative me-3">
                        <button class="btn btn-light p-0 border-0" id="notifButton">
                            <i class="fas fa-bell text-primary fa-lg"></i>
                        </button>
                        <div class="position-absolute bg-white shadow p-3 rounded" id="notifBox" style="display: none; width: 250px; left: 50%; transform: translateX(-50%); top: 50px;">
                            <p class="mb-2 fw-bold text-center">Notifikasi</p>
                            <ul class="list-unstyled mb-0">
                                <li class="border-bottom pb-2 mb-2"><a href="#" class="d-block text-dark text-decoration-none">Anda baru saja membeli Course Javascript</a></li>
                                <li class="border-bottom pb-2 mb-2"><a href="#" class="d-block text-dark text-decoration-none">Anda baru saja membeli Course Node JS</a></li>
                                <li><a href="#" class="d-block text-dark text-decoration-none">Anda baru saja membeli Course Springboot</a></li>
                                <li><a href="#" class="d-block text-dark text-decoration-none">Anda baru saja membeli Course Cyber Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-outline-primary px-4" href="#">Login/Register</a>
                </div>
            </div>
        </div>
    </nav>


    <script>
        document.getElementById('notifButton').addEventListener('click', function() {
            var notifBox = document.getElementById('notifBox');
            notifBox.style.display = notifBox.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', function(event) {
            var notifButton = document.getElementById('notifButton');
            var notifBox = document.getElementById('notifBox');
            if (!notifButton.contains(event.target) && !notifBox.contains(event.target)) {
                notifBox.style.display = 'none';
            }
        });
    </script>



    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 AnalyZis. Semua Hak Dilindungi.</p>
            <p><a href="#" class="text-white">Tentang Kami</a> | <a href="#" class="text-white">Kontak</a> |
                <a href="#" class="text-white">Syarat & Ketentuan</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>

</body>

</html>
