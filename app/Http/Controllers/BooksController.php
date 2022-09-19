<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $title = "Daftar Buku";
        return view('content.books.index', compact('title'));
    }

    public function store()
    {
        return redirect('/books')->with('Berhasil', 'Buku berhasil ditambahkan');
    }

    public function detail()
    {
        $title = "Detail Buku";
        return view('content.books.detail', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Buku";
        return view('content.books.create', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Buku";
        return view('content.books.edit', compact('title'));
    }

    public function update()
    {
        return redirect('/books')->with('Berhasil', 'Buku berhasil diubah');
    }

    public function destroy()
    {
        return redirect('/books')->with('Berhasil', 'Buku berhasil dihapus');
    }
}
