<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function index()
    {
        $title = "Daftar Penerbit";
        return view('content.publishers.index', compact('title'));
    }

    public function detail()
    {
        $title = "Detail Penerbit";
        return view('content.publishers.detail', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Penerbit";
        return view('content.publishers.create', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Penerbit";
        return view('content.publishers.edit', compact('title'));
    }

    public function store()
    {
        return redirect('/publishers')->with('Berhasil', 'Penerbit berhasil ditambahkan');
    }

    public function update()
    {
        return redirect('/publishers')->with('Berhasil', 'Penerbit berhasil diubah');
    }

    public function destroy()
    {
        return redirect('/publishers')->with('Berhasil', 'Penerbit berhasil dihapus');
    }
}
