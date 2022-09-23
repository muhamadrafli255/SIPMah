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
}
