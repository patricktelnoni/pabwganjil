<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    @extends('layouts.app')
   
    @section('content')
        <h1>Data Customer</h1>
        @foreach ($customers as $customer) 
            {{ $loop->iteration }}.
            @if($loop->odd)
                <b>Ganjil</b>
            @else
                <i>Genap</i>
            @endif
            <p class="text-blue-500">Nama : {{ $customer->customer_name }}</p>
            <p class="text-blue-500">Alamat : {{ $customer->city }}</p>
            <p class="text-blue-500">Telepon : {{ $customer->phone_number }}</p>
        @endforeach
    @endsection
</div>
