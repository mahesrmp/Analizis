<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verifikasi Kode</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white min-h-screen flex items-center justify-center relative">
    <div class="absolute top-6 right-6">
        <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline">Kembali</a>
    </div>

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow">
        <img src="{{ asset('images/logo.png') }}" alt="AnalyZis Logo" class="h-8 mb-6" />
        <h2 class="text-center text-xl font-semibold mb-2">Periksa Email Anda!</h2>
        <p class="text-center text-sm text-gray-600 mb-4" hidden>
            (Mode Testing) Kode OTP Dummy: <strong>{{ Session::get('otp') ?? '1234' }}</strong>
        </p>
        <p class="text-center text-sm text-gray-600 mb-4">
            Kami telah mengirimkan kode verifikasi 4 digit ke email Anda.
        </p>

        <form method="POST" action="{{ route('otp.verify') }}">
            @csrf
            <div class="flex justify-center space-x-3 mb-6">
                <input name="digit1" type="text" maxlength="1"
                    class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                    required />
                <input name="digit2" type="text" maxlength="1"
                    class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                    required />
                <input name="digit3" type="text" maxlength="1"
                    class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                    required />
                <input name="digit4" type="text" maxlength="1"
                    class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500"
                    required />
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                Verifikasi Kode
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Belum menerima Email?
            {{-- <a href="{{ route('otp.resend') }}" class="text-blue-600 hover:underline">Kirim ulang email</a> --}}
        </p>
    </div>
</body>

</html>
