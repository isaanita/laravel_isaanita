<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ← WAJIB ADA

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Coba login menggunakan username + password
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            return redirect('/rumah-sakit');
        }

        return back()
            ->withErrors(['username' => 'Username atau password salah'])
            ->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
