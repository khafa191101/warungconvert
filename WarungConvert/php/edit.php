<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/edit.css">

    <title>Document</title>
</head>
<body>
    <h1>Edit Profil</h1>
<!-- <form class="form" action="prosesEdit.php" method="POST"> -->
<form action="./proesEdit.php" method = "POST" class="form"> 
                <label for="username">Nama</label><br>
                <input type="text" id="nama" name="nama" required><br>
                <div class="button">
                <a href="./riwayat.php">Batal</a>
                <input type="submit" value="Ubah" id="submit">
                </div>
                
            </form>
</body>
</html>