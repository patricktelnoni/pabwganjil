<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //
    function index(){
        return view('kalkulator');
    }

    function tambah(){
        return 'Dari controller kalkulator function tambah';
    }

    function show($id){
        return 'Dari controller kalkulator function show dengan id '.$id;
    }

    function proses(Request $request){
        $angka1     = $request->input('angka1');
        $angka2     = $request->input('angka2');
        $operator   = $request->input('operator');

        if($operator == "tambah"){
            return view('hasil_kalkulator', ['hasil' => $angka1 + $angka2]);
        }
        else if($operator =="kurang"){
            return view('hasil_kalkulator', ['hasil' => $angka1 - $angka2]);
        }
        else if($operator == "kali"){
            return view('hasil_kalkulator', ['hasil' => $angka1 * $angka2]);
        }
        else{
            return view('hasil_kalkulator', ['hasil' => $angka1 / $angka2]);
        }
    }
}
