<?php

namespace App\Http\Controllers\API;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function getMembers(Request $request)
    {
        $data = User::get();
        return DataTables::of($data)->make(true);
    }
}
