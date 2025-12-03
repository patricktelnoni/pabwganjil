<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
     
     <form action="/tambah-matakuliah" method="post">
        @csrf
        <input type="text" name="nama-mata-kuliah" placeholder="Nama mk"><br>
        <input type="text" name="kode-mata-kuliah" placeholder="Kode mk"><br>
        <input type="text" name="sks" placeholder="SKS"><br>
        <input type="submit" value="Simpan">
     </form>
</div>
