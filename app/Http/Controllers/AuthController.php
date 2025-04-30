<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $dummyUsers = [
        ['email' => 'admin@gmail.com', 'password' => 'admin123', 'role' => 'admin'],
        ['email' => 'user@gmail.com', 'password' => 'user123', 'role' => 'user'],
        ['email' => 'manager@gmail.com', 'password' => 'manager123', 'role' => 'manager'],
    ];

    public function register()
    {
        return view('auth.register');
    }

    public function processRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:User,Admin'
        ]);

        $newUser = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ];

        session()->put('user', $newUser);

        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil! Anda sekarang masuk sebagai ' . $newUser['role']);
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

        $user = collect($this->dummyUsers)->firstWhere('email', $request->email);

        if (!$user || $user['password'] !== $request->password) {
            return back()->withErrors(['error' => 'Email atau password salah']);
        }

        session(['user' => $user]);

        return redirect()->route('tren_skill_role');
    }
}
