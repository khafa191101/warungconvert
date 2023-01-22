<?php
    include './koneksi.php';
    $query = mysqli_query($koneksi,"select noTelpon from user");
    $res = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/landing.css">
    <link rel="stylesheet" href="../CSS/daftar.css">
    <title>Pendaftaran</title>
</head>
<body>
    <header>
        <div class="head">
            <div class="head-left">
                <h1>Warung Convert</h1>
            </div>
            <div class="head-right">
                <nav>
                    <ul>
                        <li><a href="./beranda1.php">Home</a></li>
                        <li><a href="./login.php">Masuk</a></li>
                        <li><a href="#sign">Daftar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="form">
        <div class="left">
            <img src="../assets/daftar.png" alt="" width="700px">
        </div>
        <div class="right">
            <h2>Halo, Selamat Datang<br>di Warung Covert!</h2>
            <form action="prosestambah.php" method="POST" onsubmit="return Validasi();">
                <label for="nama">Nama</label><br>
                <input type="text" id="nama" name="nama" placeholder="Raihan" required><br>
                <label for="nope">No Handphone</label><br>
                <input type="number" id="noTelpon" name="noTelpon" placeholder="0812314123" required><br>
                <label for="lname">Kata Sandi</label><br>
                <input type="password" id="password" name="password" placeholder="******" required><br><br>
                <p>Sudah punya akun? <a href="./login.php">Masuk</a></p>
                <input type="submit" value="Daftar" id="submit">
            </form>
        </div>
    </div>
    <script>
            function Validasi(){
            var no_hp = document.getElementById('noTelpon').value;
            if(no_hp.length < 12 || no_hp.length > 13){
                alert("Isi nomor Handphone dengan benar");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
</body>
</html>