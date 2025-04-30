<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnalyZis - Login</title>
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
                        <span class="absolute inset-y-0 right-3 flex items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_138_182)">
                                    <path
                                        d="M19.3924 7.84904C18.6401 6.61714 17.6912 5.51675 16.5833 4.59154L18.9166 2.25821C19.0684 2.10104 19.1524 1.89054 19.1505 1.67204C19.1486 1.45354 19.0609 1.24453 18.9064 1.09003C18.7519 0.935518 18.5429 0.847877 18.3244 0.845979C18.1059 0.84408 17.8954 0.928075 17.7383 1.07987L15.2008 3.62071C13.6277 2.68639 11.8294 2.19943 9.99992 2.21237C4.84075 2.21237 1.90075 5.74404 0.607421 7.84904C0.207861 8.4953 -0.00378418 9.24007 -0.00378418 9.99987C-0.00378418 10.7597 0.207861 11.5045 0.607421 12.1507C1.35972 13.3826 2.30866 14.483 3.41659 15.4082L1.08325 17.7415C1.00366 17.8184 0.940177 17.9104 0.896503 18.012C0.852829 18.1137 0.82984 18.2231 0.828879 18.3337C0.827917 18.4444 0.849002 18.5541 0.890903 18.6565C0.932803 18.7589 0.994681 18.852 1.07292 18.9302C1.15117 19.0084 1.24421 19.0703 1.34663 19.1122C1.44904 19.1541 1.55877 19.1752 1.66942 19.1742C1.78007 19.1733 1.88942 19.1503 1.99109 19.1066C2.09276 19.063 2.18471 18.9995 2.26159 18.9199L4.80492 16.3765C6.37598 17.3107 8.17215 17.7985 9.99992 17.7874C15.1591 17.7874 18.0991 14.2557 19.3924 12.1507C19.792 11.5045 20.0036 10.7597 20.0036 9.99987C20.0036 9.24007 19.792 8.4953 19.3924 7.84904V7.84904ZM2.02742 11.2782C1.79003 10.8941 1.6643 10.4514 1.6643 9.99987C1.6643 9.54831 1.79003 9.10567 2.02742 8.72154C3.13909 6.91654 5.65159 3.87904 9.99992 3.87904C11.3835 3.87129 12.7476 4.20474 13.9716 4.84987L12.2941 6.52737C11.494 5.99621 10.5348 5.7582 9.57928 5.85375C8.62372 5.94929 7.73064 6.37249 7.05159 7.05154C6.37254 7.7306 5.94933 8.62367 5.85379 9.57923C5.75825 10.5348 5.99626 11.494 6.52742 12.294L4.60242 14.219C3.58167 13.3938 2.71062 12.399 2.02742 11.2782V11.2782ZM12.4999 9.99987C12.4999 10.6629 12.2365 11.2988 11.7677 11.7676C11.2988 12.2365 10.663 12.4999 9.99992 12.4999C9.62868 12.4984 9.26259 12.413 8.92909 12.2499L12.2499 8.92904C12.413 9.26254 12.4985 9.62863 12.4999 9.99987V9.99987ZM7.49992 9.99987C7.49992 9.33683 7.76331 8.70095 8.23215 8.23211C8.70099 7.76327 9.33688 7.49987 9.99992 7.49987C10.3712 7.50131 10.7373 7.58678 11.0708 7.74987L7.74992 11.0707C7.58683 10.7372 7.50136 10.3711 7.49992 9.99987ZM17.9724 11.2782C16.8608 13.0832 14.3483 16.1207 9.99992 16.1207C8.61636 16.1285 7.25222 15.795 6.02825 15.1499L7.70575 13.4724C8.50581 14.0035 9.465 14.2415 10.4206 14.146C11.3761 14.0505 12.2692 13.6273 12.9483 12.9482C13.6273 12.2692 14.0505 11.3761 14.146 10.4205C14.2416 9.46495 14.0036 8.50576 13.4724 7.70571L15.3974 5.78071C16.4182 6.60594 17.2892 7.60075 17.9724 8.72154C18.2098 9.10567 18.3355 9.54831 18.3355 9.99987C18.3355 10.4514 18.2098 10.8941 17.9724 11.2782V11.2782Z"
                                        fill="#E1E1E1" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_138_182">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
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

                <button type="submit"
                    class="w-50 bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                    Masuk
                </button>
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
</body>

</html>
