<?php
  include './koneksi.php';
  // include ("../koneksi.php");
  session_start();
  $query1 = mysqli_query($koneksi,"select password from user where noTelpon='".$_SESSION['noTelpon']."'");
  
  $passLama = $_POST['passLama'];
  $passBaru1 = $_POST['passBaru1'];
  $passBaru2 = $_POST['passBaru2'];
  $row = mysqli_fetch_array($query1);
  $password = $row[0];
  //validasi pergantian password
  if($passLama != $password){
    echo '<script>
    alert(`password lama anda salah`);
    window.location.href="./ganti.php";
    </script>';
  }else if($passLama == $passBaru1){
    echo '<script>
    alert("Password Baru Tidak Boleh Sama Dengan Password Lama");
    window.location.href="./ganti.php";
    </script>';
  }else if($passBaru1 != $passBaru2){
    echo '<script>
    alert("Password Baru Tidak Sama");
    window.location.href="./ganti.php";
    </script>';
  }else{
    $query = mysqli_query($koneksi,"update user set password='$passBaru1' where noTelpon='".$_SESSION['noTelpon']."'");  
    if($query){
      echo '<script>
      alert("Password Berhasil Diubah");
      window.location.href="./beranda.php";
      </script>';
    }else{
      echo '<script>
      alert("Password Gagal Diubah");
      window.location.href="./ganti.php";
      </script>';
    }
  }
?>