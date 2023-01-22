<?php
    include './koneksi.php';
    session_start();
    $query = mysqli_query($koneksi,"select * from riwayat");

    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    $cek = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/admin.css">
</head>
<body>
    <h1>Pelanggan Warung Convert!</h1>
    <button type="submit" class="logout">
        <a href="./beranda1.php" style="color:white; text-decoration:none;" class="asu">Logout</a>
        <img src="../assets/logout.png" alt="logout">
    </button>
    <div class="lingkaran">
        <img class="admin" src="../assets/admin.png" alt="admin">
    </div>

    <div class="content">
        
        <table width="1300px">
            <tr>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Ubah Status</th>
            </tr>
            <?php foreach($data as $i):?>
            <tr>
                <td><?php echo $i['tanggal'] ?></td>
                <td>Rp.<?php echo $i['uang'] ?></td>
                <td><?php echo $i['status'] ?></td>
                <td>
                    <a href="./statusAdmin.php?id=<?=$i['id'];?>">Ubah</a>
                    <img class="edit" src="../assets/edit.png" alt="Ubah Status">

                            <!-- <a style="color:white; text-decoration:none;" href="./statusAdmin.php?id=<?=$i['id'];?>" >Ubah Status</a> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <form action="#" method="POST">
            <button type="submit" class="simpan">Simpan</button>
        </form>
    </div>

    <footer>
        <p>&#169; Kelompok Warung Convert 5A - 2022</p>
    </footer>
    <script>
        const simpan = document.querySelector('.simpan');
        simpan.addEventListener('click', function(){
            alert('Data Berhasil Disimpan');
        });
    </script>
</body>
</html>