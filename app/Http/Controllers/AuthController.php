<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function processRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Simpan data user sementara di session
        Session::put('registration_data', $request->only(['name', 'email', 'password']));

        // Generate OTP dummy (contoh: 1234)
        $otp = '1234';
        Session::put('otp', $otp);
        Session::put('otp_email', $request->email);

        return redirect()->route('otp.verify.page');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function profile()
    {
        return view('profile');
    }

    public function proseslogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['error' => 'Email atau password salah']);
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showOtpPage()
    {
        return view('auth.otp-verification');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'digit1' => 'required|digits:1',
            'digit2' => 'required|digits:1',
            'digit3' => 'required|digits:1',
            'digit4' => 'required|digits:1',
        ]);

        $inputOtp = $request->digit1 . $request->digit2 . $request->digit3 . $request->digit4;
        $sessionOtp = Session::get('otp');

        if ($inputOtp == $sessionOtp) {
            $userData = Session::get('registration_data');

            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => bcrypt($userData['password']),
            ]);

            // Clear session
            Session::forget(['registration_data', 'otp', 'otp_email']);

            // Redirect ke dashboard atau login
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'Registrasi berhasil!');
        }

        return back()->withErrors(['otp' => 'Kode OTP tidak valid']);
    }
}
