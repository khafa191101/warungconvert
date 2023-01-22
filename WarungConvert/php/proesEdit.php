<?php
  include './koneksi.php';
  session_start();
  $namaBaru = $_POST['nama'];
  $namalama = $_SESSION['nama'];

  $query =mysqli_query($koneksi,"update user set nama='$namaBaru' where noTelpon='".$_SESSION['noTelpon']."'");

  
  if($namaBaru == $namalama){
    echo '<script>
    alert("Nama Tidak boleh sama");
    window.location.href="./edit.php";
    </script>';
  }else{
    if($query){
      $_SESSION['nama'] = $namaBaru;
      echo '<script>
      alert("Profil Berhasil Diubah");
      window.location.href="./riwayat.php";
      </script>';
    }else{
      echo '<script>
      alert("Profil Gagal Diubah");
      window.location.href="./edit.php";
      </script>';
    }
  }

?>