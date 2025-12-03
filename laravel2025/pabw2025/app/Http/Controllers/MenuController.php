<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form_menu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_menu = $request->input('nama_menu');
        $harga_menu = $request->input('harga_menu');
        // eloquent
        // Menu::create([
        //     'nama_menu' => $nama_menu,
        //     'harga_menu' => $harga_menu
        // ]);
        DB::insert(
            "INSERT INTO menus(nama_menu, harga_menu)
            VALUES('$nama_menu', '$harga_menu')"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
