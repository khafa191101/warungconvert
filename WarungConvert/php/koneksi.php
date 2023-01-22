<?php 
  $koneksi = mysqli_connect("localhost","root","","warungconvert");

  if(mysqli_connect_error()){
    echo "Koneksi Gagal".mysqli_connect_error();
  }else{
    // echo "Proses Anda Berhasil";
  }
?>