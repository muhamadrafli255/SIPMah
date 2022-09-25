<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function account()
    {
        $title = "Ubah Akun";
        return view('content.profile.index', compact('title'));
    }

    public function change_password()
    {
        $title = "Ubah Kata Sandi";
        return view('content.profile.password', compact('title'));
    }

    public function update()
    {
        return redirect('/accounts')->with('Berhasil', 'Rudiansyah Fakhrul Berhasil Diperbarui!');
    }
}
