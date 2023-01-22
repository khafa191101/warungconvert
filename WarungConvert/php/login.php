<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/landing.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Masuk</title>
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
                        <li><a href="./daftar.php">Daftar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="form">
        <div class="left">
            <img src="../assets/orang.png" alt="" width="700px">
        </div>
        <div class="right">
            <h2>Halo, Selamat Datang<br>di Warung Covert!</h2>
            <form action="proseslogin.php" method="POST">
                <label for="username">Nama</label><br>
                <input type="text" id="nama" name="nama" required><br>
                <label for="password">Kata Sandi</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <p>Belum punya akun? <a href="./daftar.php">Daftar</a></p>
                <input type="submit" value="Masuk" id="submit">
            </form>
        </div>
    </div>
</body>
</html>