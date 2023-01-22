<?php
  include './koneksi.php';
  $nama = $_POST['nama'];
  $noTelpon = $_POST['noTelpon'];
  $password = $_POST['password'];

  mysqli_query($koneksi,"insert into user values ('$noTelpon','$nama',
  '$password')");

  header("location:./login.php")
?>