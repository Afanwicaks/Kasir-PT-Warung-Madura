<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('/login'); // Ganti ini dengan nama file Blade untuk form login
    }

    // Memproses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika berhasil, redirect ke halaman home
            return redirect()->route('home');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors(['login' => 'Login failed. Please try again.']);
    }

    // Menampilkan halaman home
    public function showHome()
    {
        return view('/home'); // Ganti ini dengan nama file Blade untuk halaman home
    }
}
