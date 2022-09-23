<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CategoriesController extends Controller
{
    public function index()
    {
        $title = "Daftar Kategori";
        return view('content.categories.index', compact('title'));
    }

    public function store()
    {
        return redirect('/categories')->with('Berhasil', 'Kategori berhasil ditambahkan');
    }

    public function detail()
    {
        $title = "Detail Kategori";
        $title1 = "Daftar Buku";
        return view('content.categories.detail', compact('title', 'title1'));
    }

    public function create()
    {
        $title = "Tambah Kategori";
        return view('content.categories.create', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Kategori";
        return view('content.categories.edit', compact('title'));
    }

    public function destroy()
    {
        return redirect('/categories')->with('Berhasil', 'Kategori berhasil dihapus');
    }

    public function update()
    {
        return redirect('/categories')->with('Berhasil', 'Kategori berhasil diubah');
    }

    public function user()
    {
        $title = 'Daftar Kategori';
        return view('content.categories.user', compact('title'));
    }
}
