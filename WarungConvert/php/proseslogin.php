<?php
  include './koneksi.php';
  session_start();
  $nama = $_POST['nama'];
  $password = $_POST['password'];

  $query = mysqli_query($koneksi,"select * from user where nama='$nama' and password='$password'");
  $cek = mysqli_num_rows($query);
  $query1 = mysqli_query($koneksi,"select * from admin where nama='$nama' and password='$password'");
  $cek1 = mysqli_num_rows($query1);
  // echo $cek;

  if($cek1 ==1){
    // $_SESSION['nama'] = $nama;
    header("location:./admin.php");
  }else if($cek == 1){
    $query = mysqli_query($koneksi,"select noTelpon from user where nama='$nama'");
    $res = mysqli_fetch_assoc($query);
    $_SESSION['noTelpon'] = $res['noTelpon'];
    $_SESSION['nama'] = $nama;
    // var_dump($res['noTelpon']);
    header("location:./beranda.php");
  }
  else{
    // header("location:./login.php");
    echo '<script>
    alert("Nama atau Kata Sandi Anda Salah");
    window.location.href="./login.php";
    </script>';
  }
?>