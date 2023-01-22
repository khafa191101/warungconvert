<?php

    include("./koneksi.php");

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE from riwayat where id = $id");
    if($query){
        header("location: riwayat.php?message=berhasil");
    }
    else{
        header("location: riwayat.php?message=gagal");
    }
?>