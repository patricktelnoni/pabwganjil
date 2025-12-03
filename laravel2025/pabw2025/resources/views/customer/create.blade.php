<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
     @extends('layouts.app')
     @section('content')
        <h1>Create Customer</h1>
        <!-- Form for creating a customer would go here -->
         <form action="{{ route('customers.store') }}" method="post">
            <input type="text" name="nama_customer" placeholder="Nama Customer" id=""><br>
            <input type="text" name="kota_customer" placeholder="Kota Customer" id=""><br>
            <input type="submit" value="Simpan">
         </form>
    @endsection
</div>
