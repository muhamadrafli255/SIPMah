<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficersController extends Controller
{
    public function index()
    {
        $title = "Daftar Petugas";
        return view('content.officers.index', compact('title'));
    }

    public function store()
    {
        return redirect('/officers')->with('Berhasil', 'Petugas berhasil ditambahkan');
    }

    public function create()
    {
        $title = "Tambah Petugas";
        return view('content.officers.create', compact('title'));
    }

    public function detail()
    {
        $title = "Detail Petugas";
        return view('content.officers.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Petugas";
        return view('content.officers.edit', compact('title'));
    }

    public function disable()
    {
        return redirect('/officers')->with('Berhasil', 'Petugas berhasil dihapus');
    }

    public function reset()
    {
        return redirect('/officers')->with('Berhasil', 'Tautan atur ulang kata sandi berhasil dikirim');
    }

    public function update()
    {
        return redirect('/officers')->with('Berhasil', 'Petugas berhasil diubah');
    }
}
