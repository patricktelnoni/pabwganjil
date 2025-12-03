<div>
    @extends('layouts.app')
    @section('title', 'Data Mata Kuliah')
    @section('sidebar')
        <h2 class="text-xl font-bold mb-4">Sidebar Content</h2>
        <ul class="list-disc pl-5">
            <li><a href="/form_customer" class="text-blue-500 hover:underline">Add Customer</a></li>
            <li><a href="/list-customer" class="text-blue-500 hover:underline">View Customers</a></li>
            <li><a href="/logout" class="text-blue-500 hover:underline">Logout</a></li>
        </ul>
    @endsection
    @section('isi')
        @forelse($data_mk as $mk)
            {{$loop->iteration}} - {{ $mk -> kode_mata_kuliah }} - {{ $mk -> nama_mata_kuliah }} <br>
        @empty
            <p>Tidak ada data mata kuliah.</p>
        @endforelse
    @endsection
</div>
