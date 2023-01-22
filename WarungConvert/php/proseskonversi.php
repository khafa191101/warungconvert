<?php
  include './koneksi.php';
  session_start();
  
  $nohp = $_POST['no_hp'];
  $nominal = $_POST['nominal'];
  $uang = $_POST['uang'];
  $ewallet = $_POST['ewallet'];
  $nowallet = $_POST['nowallet'];
  $status = "Menunggu";
  $date = date("Y-m-d");
//On page 1
  $_SESSION['nohp'] = $nohp;
  $_SESSION['nominal'] = $nominal;
  $_SESSION['ewallet'] = $ewallet;
  $_SESSION['nowallet'] = $nowallet;


  $a = (int)$uang;
  $jumlah = round($a);

  if($jumlah <= 10000){
    echo '<script>
    alert("Anda belum klik tombol chek");
    window.location=history.go(-1);
    </script>';
    exit();
  }

  $query= mysqli_query($koneksi,"insert into riwayat (noTelpon,status,tanggal,uang) 
  values ('".$_SESSION['noTelpon']."','$status','$date','$jumlah')");
  if($query){
    echo '<script>
    alert("Konversi Berhasil ");
    window.location.href="./bridge.php";
    </script>';
  }
  else{
    echo '<script>
    alert("Konversi Gagal");
    window.location.href="./konversiindosat.php";
    </script>';
  }
?>