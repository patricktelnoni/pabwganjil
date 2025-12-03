<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliahModel;

class MataKuliahController extends Controller
{
    //
    public $daftar_mata_kuliah = ['APSI', 'PBO', 'WEB', 'JARKOM'];

    public function index(){
        //SELECT * FROM table_mata_kuliah
        $data_mk = MataKuliahModel::all();
        return view('matakuliah/read', compact('data_mk'));
    }

    public function tambah(){
        return view('matakuliah/create');
    }

    public function simpan(Request $request){
        $nama_mata_kuliah = $request->input('nama-mata-kuliah');
        $kode_mata_kuliah = $request->input('kode-mata-kuliah');
        $sks = $request->input('sks');

        MataKuliahModel::create([
            'nama_mata_kuliah' => $nama_mata_kuliah,
            'kode_mata_kuliah' => $kode_mata_kuliah,
            'dosen_id' => 1,
            'sks' => $sks
        ]);
        return 'Halaman simpan Mata Kuliah dengan nama '.$nama_mata_kuliah;
    }

    public function show($idmatakuliah){
        return 'Halaman tampil Mata Kuliah dengan id '.$idmatakuliah;
    }

    public function edit(){
        return 'Halaman edit Mata Kuliah';
    }
}
