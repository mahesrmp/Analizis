<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AnalyZis')</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/homepage-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tren-skill-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
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
                    <li><a class="nav-link text-dark {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">Beranda</a></li>
                    <li><a class="nav-link text-dark {{ request()->routeIs('tren_skill_role') ? 'active' : '' }}"
                            href="{{ route('tren_skill_role') }}">Tren Skill & Role</a></li>
                    <li><a class="nav-link text-dark {{ request()->routeIs('course') ? 'active' : '' }}"
                            href="{{ route('course') }}">Course Pelatihan</a></li>
                    <li><a class="nav-link text-dark {{ request()->routeIs('forum-diskusi') ? 'active' : '' }}"
                            href="{{ route('forum-diskusi') }}">Forum Diskusi</a></li>
                    <li><a class="nav-link text-dark {{ request()->routeIs('tentang-analyzis') ? 'active' : '' }}"
                            href="{{ route('tentang-analyzis') }}">Tentang Analyzis</a></li>
                </ul>
            </nav>
            <div class="navbar-icons">
                <a href="#" class="icon-button">
                    <i class="fas fa-envelope-circle-check"></i>
                </a>
                <a href="{{ route('profile') }}" class="icon-button">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>            
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>© 2023 Analyz.is. Semua Hak Dilindungi | Kebijakan Privasi | Syarat & Ketentuan</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>

</body>

</html>
