<?php
require('config.php');

$perintah = "SELECT * FROM databarang";

$query = mysqli_query($conn, $perintah)


?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>DATA BARANG</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
  <div class="bgproduk">
    <h1>TABEL BARANG</h1>
    <table class="produk" border="1">

      <thead>
        <th>Id</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Tanggal Produk Baru</th>
        <th>Harga</th>
      </thead>
      <?php while ($rows = mysqli_fetch_assoc($query)) : ?>
      <tbody>
        <tr>
          <td><?= $rows['id'] ?></td>
          <td><?= $rows['nama'] ?></td>
          <td><?= $rows['kategori'] ?></td>
          <td><?= $rows['waktu'] ?></td>
          <td><?= $rows['harga'] ?></td>
        </tr><br>
      </tbody>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>