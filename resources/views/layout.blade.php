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

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('logo.jpeg') }}" alt="AnalyZis Logo" height="100">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ request()->routeIs('dashboard') ? 'fw-bold' : '' }}"
                            href="{{ route('dashboard') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ request()->is('tren-skill-role') ? 'fw-bold' : '' }}"
                            href="{{ url('tren-skill-role') }}">Tren Keterampilan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Rekomendasi Pelatihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Layanan Perusahaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Komunitas</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex">
                <a class="btn btn-outline-primary px-4" href="#">Login/Register</a>
            </div>
        </div>
    </nav>



    @yield('content')

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 AnalyZis. Semua Hak Dilindungi.</p>
            <p><a href="#" class="text-white">Tentang Kami</a> | <a href="#" class="text-white">Kontak</a> |
                <a href="#" class="text-white">Syarat & Ketentuan</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
