<?php

include './koneksi.php';
$id = $_POST['id'];
$status = $_POST['status'];
$query = mysqli_query($koneksi, "UPDATE riwayat SET status = '$status' WHERE id = $id");

if($query){
  echo '<script>
  alert("BERHASIL DIUBAH");
  window.location.href="./admin.php";
  </script>';
}else{
  echo '<script>
  alert("Gagal DIUBAH");
  window.location.href="./statusAdmin.php";
  </script>';
}

?>