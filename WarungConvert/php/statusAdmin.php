<?php
    include './koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM riwayat Where id = $id");
    $riwayat = mysqli_fetch_assoc($query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Status Pelanggan</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/statusAdmin.css">
</head>
<body>
    <h1>Ubah Status Pelanggan</h1>
    <div class="content">
        <form action="prosesStatusAdmin.php" method="POST">
        <input type="hidden" name="id" value="<?= $riwayat['id']?>">
            <label for="status">Status</label><br>
            <select name="status" id="status">
                <option value="berhasil">Berhasil</option>
                <option value="gagal">Gagal</option>
                <option value="proses">Proses</option>
            </select><br>
    
            <input type="submit" name="submit" id="submit" class="submit" value="Ubah">
        </form>
    </div>

</body>
</html>