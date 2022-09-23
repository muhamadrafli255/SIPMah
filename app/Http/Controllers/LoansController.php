<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function index()
    {
        $title = 'Daftar Peminjaman';
        return view('content.loans.index', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Peminjaman";
        return view('content.loans.detail', compact('title'));  
    }

    public function detail2()
    {
        $title = "Detail Peminjaman";
        return view('content.loans.detail2', compact('title'));  
    }

    public function edit()
    {
        $title = "Edit Peminjaman";
        return view('content.loans.edit', compact('title'));
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
