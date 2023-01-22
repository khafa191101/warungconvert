<?php
    include './koneksi.php';
    session_start();

    $query = mysqli_query($koneksi,"select * from riwayat where noTelpon = ".$_SESSION['noTelpon']."");

    $res = mysqli_fetch_all($query,MYSQLI_ASSOC);

    $cek = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/riwayat.css">
</head>
<body>
    <div class="navBar">

        <ul id="menu_dropdown">
            <li class="menu_utama"><a href="login.php">Logout</a></li>
            <li class="menu_utama"><a href="./beranda.php #tutorial">Tutorial</a></li>
            <li class="menu_utama"><a href="./beranda.php #konversi">Konversi</a></li> 
        </ul>
    </div>

    <div class="profil">
        <h1 class="judul">MENU PROFILE</h1>
        <h1 class="nama"><?php echo $_SESSION['nama'];?></h1>
        <h2><?php echo $_SESSION['noTelpon'];?></h2>

        <div class="button">
            <a href="./edit.php">Edit Profile</a>
            <a href="./ganti.php">Ganti Password</a>
        </div>
    </div>

    <img class="riwayat" src="../assets/riwayat.png" alt="Riwayat">

    <div class="content">
        <!-- <label for="no_telp">Masukkan Nomor Anda</label><br>
        <input type="text" name="no_telp" id="no_telp"> -->
        
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th width>Aksi</th>
            </tr>
            <?php foreach($res as $i): ?>
                <tr>
                    <td><?php echo $i['tanggal'] ?></td>
                    <td>Rp.<?php echo $i['uang'] ?></td>
                    <td><?php echo $i['status'] ?></td>
                    <td>
                        <button><a class="hapus" href="./hapus.php?id=<?=$i['id'];?>">Hapus</a></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <footer>
        <p>&#169; Kelompok Warung Convert 5A - 2022</p>
    </footer>
</body>
</html>