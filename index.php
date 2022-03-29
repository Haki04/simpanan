<?php 
require('config.php');

$query = "SELECT * FROM database";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Byme</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="bg">
    <div class="bener">
      <img class="bener" src="kucing1.jpg" alt="">
    </div>
    <div class="about">
      <h1 class="about">About Byme</h1>
      <P class="about">Atribut adalah suatu nama untuk kolom yang terdapat pada sebuah relasi. Atribut juga sering disebut sebagai kolom atau field.
Komponen atribut adalah karakteristik (pro-
perti) yang mendeskripsikan suatu entitas. Dalam sistem basis data, atribut ini
merujuk pada kolom tabel. 

Atribut dibagi menjadi tujuh jenis yaitu atribut sederhana, atribut komposit,
atribut bernilai tunggal, atribut bernilai banyak, atribut harus bernilai (mandatory
attribute), atribut nilai null, dan atribut turunan.


1. Atribut sederhana adalah atribut atomik yang tidak dapat dipilah lagi. Con-
tohnya adalah jenis kelamin dan jurusan.
2. Atribut komposit adalah atribut yang masih dapat diuraikan lagi menjadi
sub-sub atribut yang masing-masing memiliki makna. Sebagai contoh, pada
atribut Nama dapat diuraikan menjadi nama depan, nama tengah, nama be-
lakang. Contoh lainnya adalah atribut alamat (nama jalan, nomor rumah,
kota).
3. Atribut bernilai tunggal adalah atribut yang hanya memiliki maksimal satu
nilai di tiap datanya. Contohnya NIM, nama, dan tanggal lahir.
4. Atribut bernilai banyak adalah atribut yang dapat diisi lebih dari satu nilai.
Misalnya hobby dan nomor handphone.
5. Atribut harus bernilai (mandatory attribute) adalah atribut yang harus berisi
suatu data. Contohnya adalah NIM, nama mahasiswa, dan alamat.</P>
    </div>
    <div class="content"></div>
    <div class="contac"></div>
  </div>
</body>
</html>