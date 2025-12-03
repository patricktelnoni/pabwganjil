<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
     <form action="/create-menu" method="post">
        @csrf
        @auth('admin')
            <p>Logged in as: {{ auth('admin')->user()->name }}</p>
         @endauth
        <input type="text" name="nama_menu" placeholder="Nama menu"><br>
        <input type="text" name="harga_menu" placeholder="Harga menu" id=""><br>
        <input type="submit" value="Kirim">
     </form>
</div>
