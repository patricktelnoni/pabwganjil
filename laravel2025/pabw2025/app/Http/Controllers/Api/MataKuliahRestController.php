<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Http\Resources\MataKuliahResource;

class MataKuliahRestController extends Controller
{
    //
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return MataKuliahResource::collection($matakuliah);
    }
}
