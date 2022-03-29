<?php
$conn = mysqli_connect("localhost","root","","database");
if (!$conn) {
  echo("
  <script>
  alert('gagal terhubung atau ada masalah !');
  </script>
  ");
}

?>