<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

    @auth 
        <h1>Hello user, {{ Auth::user() }}</h1>
    @endauth

    @guest
      <h1>Login dulu</h1>
    @endguest

     @extends('layouts.app')
     @section('title', 'Form Tambah Mata Kuliah')
     @section('isi')
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            action="/tambah-matakuliah" method="post">
            @csrf
            <input type="text" name="nama-mata-kuliah" placeholder="Nama mk"><br>
            <input type="text" name="kode-mata-kuliah" placeholder="Kode mk"><br>
            <input type="text" name="sks" placeholder="SKS"><br>
            <input type="submit" value="Simpan" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
     @endsection
</div>
