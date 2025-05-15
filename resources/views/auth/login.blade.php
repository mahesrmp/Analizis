<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnalyZis - Login</title>
    <style>
        .toggle-password {
            cursor: pointer;
            transition: all 0.3s;
        }

        .toggle-password:hover {
            opacity: 0.8;
        }

        .toggle-password svg {
            width: 20px;
            height: 20px;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">
    <div class="w-1/2 bg-blue-400 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('{{ asset('images/logo1.png') }}')] bg-cover bg-center opacity-30"></div>
        <div class="absolute inset-0 bg-blue-400 opacity-70"></div>
        <div class="relative z-10 flex items-center justify-center h-full">
            <img src="{{ asset('images/logo1.png') }}" alt="Background Buildings"
                class="w-full h-full object-cover opacity-100" />
        </div>
    </div>

    <div class="w-1/2 flex items-center justify-center px-12">
        <div class="w-full max-w-md">
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="AnalyZis Logo" class="mx-auto mb-4 h-10">
            </div>
            <div class="text-center mb-4">
                <h2 class="text-2xl font-semibold">Hai, Selamat datang kembali</h2>
            </div>

            <div class="text-center mt-4 mb-4 text-sm">
                <p>
                    Baru di AnalyZis?
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar Gratis</a>
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center">
                            <svg width="21" height="17" viewBox="0 0 21 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.8333 0.166626H2.16665C1.02081 0.166626 0.0937296 1.10413 0.0937296 2.24996L0.083313 14.75C0.083313 15.8958 1.02081 16.8333 2.16665 16.8333H18.8333C19.9791 16.8333 20.9166 15.8958 20.9166 14.75V2.24996C20.9166 1.10413 19.9791 0.166626 18.8333 0.166626ZM18.8333 4.33329L10.5 9.54163L2.16665 4.33329V2.24996L10.5 7.45829L18.8333 2.24996V4.33329Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <input type="email" name="email" id="email" placeholder="Masukkan email"
                            class="w-full py-3 pl-12 pr-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="password" class="block mb-2 font-medium text-gray-700">Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center">
                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.50002 16.7083C9.05256 16.7083 9.58246 16.4888 9.97316 16.0981C10.3639 15.7074 10.5834 15.1775 10.5834 14.625C10.5834 14.0724 10.3639 13.5425 9.97316 13.1518C9.58246 12.7611 9.05256 12.5416 8.50002 12.5416C7.94749 12.5416 7.41758 12.7611 7.02688 13.1518C6.63618 13.5425 6.41669 14.0724 6.41669 14.625C6.41669 15.1775 6.63618 15.7074 7.02688 16.0981C7.41758 16.4888 7.94749 16.7083 8.50002 16.7083ZM14.75 7.33329C15.3026 7.33329 15.8325 7.55279 16.2232 7.94349C16.6139 8.33419 16.8334 8.86409 16.8334 9.41663V19.8333C16.8334 20.3858 16.6139 20.9157 16.2232 21.3064C15.8325 21.6971 15.3026 21.9166 14.75 21.9166H2.25002C1.69749 21.9166 1.16758 21.6971 0.776881 21.3064C0.38618 20.9157 0.166687 20.3858 0.166687 19.8333V9.41663C0.166687 8.86409 0.38618 8.33419 0.776881 7.94349C1.16758 7.55279 1.69749 7.33329 2.25002 7.33329H3.29169V5.24996C3.29169 3.86862 3.84042 2.54386 4.81717 1.56711C5.79392 0.590359 7.11868 0.041626 8.50002 0.041626C9.18399 0.041626 9.86126 0.176344 10.4932 0.438087C11.1251 0.69983 11.6992 1.08347 12.1829 1.56711C12.6665 2.05075 13.0502 2.62491 13.3119 3.25682C13.5736 3.88872 13.7084 4.56599 13.7084 5.24996V7.33329H14.75ZM8.50002 2.12496C7.67122 2.12496 6.87636 2.4542 6.29031 3.04025C5.70426 3.6263 5.37502 4.42116 5.37502 5.24996V7.33329H11.625V5.24996C11.625 4.42116 11.2958 3.6263 10.7097 3.04025C10.1237 2.4542 9.32882 2.12496 8.50002 2.12496Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <input type="password" name="password" id="password" placeholder="Masukkan kata sandi"
                            class="w-full py-3 pl-12 pr-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                            required>
                        <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer toggle-password"
                            onclick="togglePassword()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </span>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="text-right">
                    <a href="#" class="text-sm text-blue-600 hover:underline">Lupa kata sandi?</a>
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="w-50 max-w-xs bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                        Masuk
                    </button>
                </div>
            </form>

            <div class="text-center mt-6 text-xs text-gray-500">
                <p>
                    Dengan melanjutkan, kamu menerima
                    <a href="#" class="underline">Syarat Pengguna</a>
                    dan
                    <a href="#" class="underline">Kebijakan Privasi</a> kami.
                </p>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk toggle visibility password
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.querySelector('.toggle-password svg');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Ganti ikon mata tertutup ke mata terbuka
                eyeIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M17.94 17.94A10.86 10.86 0 0 1 12 19c-7 0-11-7-11-7a20.3 20.3 0 0 1 5.06-5.94M1 1l22 22"/>
                    </svg>
                `;
            } else {
                passwordInput.type = 'password';
                // Ganti ikon mata terbuka ke mata tertutup
                eyeIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                `;
            }
        }
    </script>
</body>

</html>
