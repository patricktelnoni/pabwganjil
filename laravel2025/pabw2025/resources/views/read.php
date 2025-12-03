@extends('layouts.app')
@section('isi')
    <table>
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->nama }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->nomor_telepon }}</td>
                    <td>{{ $customer->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection