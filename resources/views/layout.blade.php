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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .group:hover .group-hover\:block {
            display: block;
        }
    </style>

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
                    <li><a class="nav-link text-dark {{ request()->routeIs('forum.index') ? 'active' : '' }}"
                            href="{{ route('forum.index') }}">Forum Diskusi</a></li>
                    <li><a class="nav-link text-dark {{ request()->routeIs('tentang-analyzis') ? 'active' : '' }}"
                            href="{{ route('tentang-analyzis') }}">Tentang Analyzis</a></li>
                </ul>
            </nav>
            <div class="navbar-icons flex items-center gap-3 relative">
                <a href="#" class="icon-button">
                    <i class="fas fa-envelope-circle-check"></i>
                </a>
                @auth
                    <!-- Button to toggle dropdown -->
                    <button id="profileDropdownBtn" class="icon-button" title="Profil">
                        <i class="fas fa-user-circle"></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="profileDropdown"
                        class="absolute right-0 top-10 mt-2 w-40 bg-white rounded-md shadow-lg hidden z-50">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Profil Saya
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">
                        Masuk
                    </a>
                @endguest
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btn = document.getElementById("profileDropdownBtn");
            const dropdown = document.getElementById("profileDropdown");
    
            btn.addEventListener("click", function (e) {
                e.stopPropagation();
                dropdown.classList.toggle("hidden");
            });
    
            // Klik di luar dropdown menutup dropdown
            document.addEventListener("click", function (e) {
                if (!dropdown.classList.contains("hidden")) {
                    dropdown.classList.add("hidden");
                }
            });
        });
    </script>
    
</body>

</html>
