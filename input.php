<?php 
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inputan Barang</title>
</head>
<body>
  <form action="function.php" method="post">
    <tabel>
      <tr>
        <td><label for="barang">Nama barang : </label></td>
        <td><input type="text" name="barang" id="barang"></td>
      </tr><br>
      <tr>
        <td><label for="kategori">Kategori : </label></td>
        <select name="kategori" id="kategori">
          <option value="kosong">-</option>
          <option value="baju">Baju</option>
          <option value="jaket">Jaket</option>
          <option value="celana">Celana</option>
        </select>
      </tr><br>
      <tr>
        <td><label for="waktu">Waktu : </label></td>
        <td><input type="date" name="waktu" id="waktu"></td>
      </tr><br>
      <tr>
        <td><label for="barang">Harga barang : </label></td>
        <td><input type="text" name="harga" id="harga"></td>
      </tr><br>
      <tr>
        <td><button type="submit" name="submit">Kirim</button></td>
      </tr>
    </tabel>
  </form>
</body>
</html>