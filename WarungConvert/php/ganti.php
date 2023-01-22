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
    <h1>Ganti Password</h1>
            <!-- <form class="form" action="./prosesgGanti.php" method="POST"> -->
            <form action="./prosesGanti.php" method = "POST" class="form"> 
                <label for="username">Password Sekarang</label><br>
                <input type="password" id="passLama" name="passLama"><br>
                <label for="username">Password Baru</label><br>
                <input type="password" id="passBaru1" name="passBaru1"><br>
                <label for="username">Ulangi Password Baru</label><br>
                <input type="password" id="passBaru2" name="passBaru2"><br>
                <div class="button">
                <a href="./riwayat.php">Batal</a>
                <input type="submit" value="Ubah" id="submit">
                </div>
                
            </form>
</body>
</html>