<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $title = "Masuk";
        return view('auth.login', compact('title'));
    }

    public function attempt()
    {
        return redirect('/dashboard')->with('Berhasil', 'Login berhasil selamat datang kembali');
    }

    public function register()
    {
        $title = "Registrasi";
        return view('auth.register', compact('title'));
    }

    public function store()
    {
        return redirect('/')->with('Berhasil', 'Registrasi berhasil
        silahkan cek email yang anda daftarkan
        untuk proses aktivasi');
    }

    public function activation()
    {   
        $title = 'Aktivasi Akun';
        return view('auth.activation', compact('title'));
    }

    public function active()
    {
        return redirect('/')->with('Berhasil', 'Aktivasi berhasil silahkan login');
    }

    public function forgot()
    {
        $title = 'Lupa Kata Sandi';
        return view('auth.forgot-password', compact('title'));
    }

    public function change_password()
    {
        return redirect('/')->with('Berhasil', 'Tautan atur ulang kata sandi berhasil dikirim silahkan cek email anda');
    }

    public function reset_password()
    {
        $title = 'Atur Ulang Kata Sandi';
        return view('auth.reset-password', compact('title'));
    }

    public function update_password()
    {
        return redirect('/')->with('Berhasil', 'Kata sandi berhasil diatur ulang silahkan login');
    }
}
