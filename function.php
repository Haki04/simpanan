<?php
require('config.php');
// barang
  $barang = $_POST['barang'];
  $kategori = $_POST['kategori'];
  $waktu = $_POST['waktu'];
  $harga = $_POST['harga'];
  
function input() {
  global $conn,$barang,$kategori,$waktu,$harga;
  $querybarang = "INSERT INTO databarang(nama,kategori,waktu,harga) VALUES('$barang','$kategori','$waktu','$harga') ";
 mysqli_query($conn, $querybarang);
  
}

if (isset($_POST['submit'])) {
  input();
  echo('<h1>BERHASIL !</h1>');
}
// login
$username = $_POST['username'];
$password = $_POST['password'];

function login() {
  global $username,$password,$conn;
  $querylogin = "INSERT INTO user(nama,password) VALUES('$username','$password')";
  mysqli_query($conn,$querylogin);
  
}
if(isset($_POST['submitlogin']) ) {
  login();
  echo('berhasil');
}
/*
function login() {
  global $username,$password,$conn;
  $querylogin = "SELECT "
  mysqli_query($conn,$querylogin);
  
}*/

?>