<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RacksController extends Controller
{
    public function index()
    {
        $title = "Daftar Rak";
        return view('content.racks.index', compact('title'));
    }

    public function detail()
    {
        $title = "Detail Rak";
        return view('content.racks.detail', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Rak";
        return view('content.racks.create', compact('title'));
    }

    public function edit()
    {
        $title = "Edit Rak";
        return view('content.racks.edit', compact('title'));
    }

    public function update()
    {
        return redirect('/racks')->with('Berhasil', 'Rak 1 Berhasil Diperbarui!');
    }

    public function destroy()
    {
        return redirect('/racks')->with('Berhasil', 'Rak berhasil dihapus');
    }

    public function store()
    {
        return redirect('/racks')->with('Berhasil', 'Rak berhasil ditambahkan');
    }

}
