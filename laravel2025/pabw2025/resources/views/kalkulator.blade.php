<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
     <form action="/proses" method="post">
        @csrf
      <input type="text" name="angka1" placeholder="Angka 1">  <br>
      <input type="text" name="angka2" placeholder="Angka 2">  <br>
      <select name="operator">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
      </select>
      <br>
      <input type="submit" value="Hitung">
     </form>
</div>
