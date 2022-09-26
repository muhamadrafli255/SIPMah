<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $title = "Laporan";
        return view('content.report.index', compact('title'));
    }

    public function borrowed()
    {
        $title = "Detail Sedang Dipinjam";
        return view('content.report.borrowed', compact('title'));
    }

    public function books()
    {
        $title = "Paling Banyak Dipinjam";
        return view('content.report.books', compact('title'));
    }

    public function members()
    {
        $title = "Peminjaman Peranggota";
        return view('content.report.members', compact('title'));
    }
}
