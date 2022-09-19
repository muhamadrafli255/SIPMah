<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $title = "Daftar Anggota";
        return view('content.members.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Anggota";
        return view('content.members.create', compact('title'));
    }

    public function detail()
    {
        $title = "Detail Anggota";
        return view('content.members.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Anggota";
        return view('content.members.edit', compact('title'));
    }

    public function store()
    {
        return redirect('/members')->with('Berhasil', 'Data anggota berhasil ditambahkan');
    }

    public function update()
    {
        return redirect('/members')->with('Berhasil', 'Data anggota berhasil dirubah');
    }

    public function disable()
    {
        return redirect('/members')->with('Berhasil', 'Data anggota berhasil dinonaktifkan');
    }

    public function reset()
    {
        return redirect('/members')->with('Berhasil', 'Tautan atur ulang kata sandi berhasil dikirim');
    }
}
