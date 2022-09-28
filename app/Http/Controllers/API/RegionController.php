<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class RegionController extends Controller
{
    public function getProvinces(Request $request)
    {
        $provinces = Http::get('https://muhamadrafli255.github.io/api-wilayah-indonesia/api/provinces.json');
        $response = $provinces->json($request->query(
            'id',
            'name,'
        ));
        return $response;
    }
}
