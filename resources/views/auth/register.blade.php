<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnalyZis - Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            height: 100vh;
            display: flex;
        }

        /* Layout */
        .left-side {
            width: 50%;
            background-color: #60a5fa;
            position: relative;
            overflow: hidden;
        }

        .background-overlay {
            position: absolute;
            inset: 0;
            background-image: url('D:/kuliah/Sem 8/tekno/tekno/images/bg/logo1.png');
            background-size: cover;
            background-position: center;
            opacity: 0.3;
        }

        .blue-overlay {
            position: absolute;
            inset: 0;
            background-color: #60a5fa;
            opacity: 0.7;
        }

        .logo-container {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .logo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
        }

        .right-side {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 48px;
        }

        .login-container {
            width: 100%;
            max-width: 448px;
        }

        .header-logo {
            text-align: center;
            margin-bottom: 16px;
        }

        .header-logo img {
            height: 40px;
            margin: 0 auto;
        }

        .title {
            text-align: center;
            margin-bottom: 16px;
        }

        .title h2 {
            font-size: 24px;
            font-weight: 600;
        }

        .register-link {
            text-align: center;
            margin-top: 16px;
            margin-bottom: 16px;
            font-size: 14px;
        }

        .register-link a {
            color: #2563eb;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .form-container {
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
        }

        .input-field {
            width: 100%;
            padding: 12px 12px 12px 48px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s;
        }

        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }

        .submit-button {
            width: 100%;
            background-color: #3b82f6;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #2563eb;
        }

        .terms {
            text-align: center;
            margin-top: 24px;
            font-size: 12px;
            color: #6b7280;
        }

        .terms a {
            text-decoration: underline;
            color: #6b7280;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-field {
            width: 100%;
            padding: 10px 40px 10px 40px;
            /* kiri & kanan ada space utk icon */
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .input-icon {
            position: absolute;
            left: 10px;
            pointer-events: none;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="left-side">
        <div class="background-overlay"></div>
        <div class="blue-overlay"></div>
        <div class="logo-container">
            <img src="{{ asset('images/logo1.png') }}" alt="Analyzis background">
        </div>
    </div>

    <div class="right-side">
        <div class="login-container">
            <div class="header-logo">
                <img src="{{ asset('images/logo.png') }}" alt="AnalyZis Logo">
            </div>
            <div class="title">
                <h2>Buat akun AnalyZis kamu</h2>
            </div>

            <div class="register-link">
                <p>
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Masuk Sekarang</a>
                </p>
            </div>

            <form action="{{ route('register.process') }}" method="POST" class="form-container">
                @csrf

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5z"></path>
                                <path d="M2 22c0-4 4-7 10-7s10 3 10 7"></path>
                            </svg>
                        </span>
                        <input type="text" name="name" id="name" placeholder="Nama pengguna"
                            class="input-field" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 4h16v16H4z" stroke="black" fill="none" />
                                <path d="M4 4l8 8 8-8" stroke="black" fill="none" />
                            </svg>
                        </span>
                        <input type="email" name="email" id="email" placeholder="Email" class="input-field"
                            value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="10" rx="2" ry="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                        </span>
                        <input type="password" name="password" id="password" placeholder="Kata Sandi"
                            class="input-field" required>
                        <span class="toggle-password" onclick="togglePassword('password', this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Kata Sandi</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="10" rx="2" ry="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                        </span>
                        <input type="password" name="password_confirmation" id="confirm-password"
                            placeholder="Konfirmasi Kata Sandi" class="input-field" required>
                        <span class="toggle-password" onclick="togglePassword('confirm-password', this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="black" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </span>
                    </div>
                </div>

                <button type="submit" class="submit-button">Daftar Sekarang</button>
            </form>

            <div class="terms">
                Dengan mendaftar, kamu menyetujui <a href="#">Syarat</a> dan <a href="#">Kebijakan
                    Privasi</a> kami.
            </div>
        </div>
    </div>
    <script>
        function togglePassword(fieldId, iconElement) {
            const input = document.getElementById(fieldId);
            const isPassword = input.type === "password";
            input.type = isPassword ? "text" : "password";

            // Ganti ikon mata terbuka/tertutup
            iconElement.innerHTML = isPassword ?
                `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M17.94 17.94A10.86 10.86 0 0 1 12 19c-7 0-11-7-11-7a20.3 20.3 0 0 1 5.06-5.94M1 1l22 22"/>
                    </svg>` :
                `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>`;
        }
    </script>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const button = document.getElementById('registerButton');
            button.disabled = true;
            button.textContent = 'Memproses...';

            fetch(this.action, {
                    method: 'POST',
                    body: new FormData(this),
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('OTP Dummy: ' + data.message); // Tampilkan OTP dummy di alert
                        window.location.href = "{{ route('otp.verify.page') }}";
                    } else {
                        alert('Error: ' + (data.message || 'Terjadi kesalahan'));
                        button.disabled = false;
                        button.textContent = 'Daftar Sekarang';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan jaringan');
                    button.disabled = false;
                    button.textContent = 'Daftar Sekarang';
                });
        });
    </script>

</body>

</html>
