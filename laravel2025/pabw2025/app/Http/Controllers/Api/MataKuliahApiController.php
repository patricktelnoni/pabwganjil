<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MataKuliahModel;
use App\Http\Resources\MataKuliahResource;

class MataKuliahApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mata_kuliah = MataKuliahModel::with('dosen')->get();
        return MataKuliahResource::collection($mata_kuliah);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_mata_kuliah = $request->input('nama_mata_kuliah');
        $kode_mata_kuliah = $request->input('kode_mata_kuliah');
        $dosen_id         = $request->input('dosen_id');
        $sks              = $request->input('sks');
        
        $create = MataKuliahModel::create([
            'nama_mata_kuliah' => $nama_mata_kuliah,
            'kode_mata_kuliah' => $kode_mata_kuliah,
            'dosen_id'         => $dosen_id,
            'sks'              => $sks,
        ]);

        if(!$create){
            return response()->json(['message' => 'Failed to create Mata Kuliah'], 500);
        }

        return response()->json(['message' => 'Mata Kuliah created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $mata_kuliah = MataKuliahModel::findOrFail($id);
        return new MataKuliahResource($mata_kuliah);
    }
    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $nama_mata_kuliah = $request->input('nama_mata_kuliah');
        $kode_mata_kuliah = $request->input('kode_mata_kuliah');
        $dosen_id         = $request->input('dosen_id');
        $sks              = $request->input('sks');

        $mata_kuliah = MataKuliahModel::findOrFail($id);
        $mata_kuliah->update([
            'nama_mata_kuliah' => $nama_mata_kuliah,
            'kode_mata_kuliah' => $kode_mata_kuliah,
            'dosen_id'         => $dosen_id,
            'sks'              => $sks,
        ]);

        if(!$mata_kuliah){
            return response()->json(['message' => 'Failed to update Mata Kuliah'], 500);
        }

        return response()->json(['message' => 'Mata Kuliah updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $mata_kuliah = MataKuliahModel::findOrFail($id);
        $delete = $mata_kuliah->delete();

        if(!$delete){
            return response()->json(['message' => 'Failed to delete Mata Kuliah'], 500);
        }

        return response()->json(['message' => 'Mata Kuliah deleted successfully'], 200);
    }
}
