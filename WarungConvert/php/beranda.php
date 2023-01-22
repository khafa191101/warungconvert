<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/test.css">
</head>
<body>
    <div class="navBar">

        <ul id="menu_dropdown">
            <li class="menu_utama">Profil
                <ul class="menu_sub">
                    <li><a href="./riwayat.php">Lihat Profil</a></li>
                    <li><a href="./beranda1.php">Logout</a></li>
                    <!-- <input type="submit" value="logout" id="logout"> -->
                </ul>
            </li>

            <li class="menu_utama"><a href="#tutorial">Tutorial</a></li>
            
            <li class="menu_utama"><a href="#konversi">Konversi</a></li>
            
        </ul>
    </div>

    <div id="beranda">
        <h1>Selamat Datang <?php echo $_SESSION['nama'];  ?> di Warung Convert!</h1>
        <img src="../assets/ilustrasi.png" alt="Selamat Datang">
        <div class="tulisan">
            <p>“Warung Convert” adalah website penukar pulsa menjadi mata uang rupiah (Rp).</p>
            <p>Nikmati kemudahan dalam penukaran pulsa ke dalam mata uang rupiah sesuai dengan nominal yang tertera.</p><br>
            <!-- <p> - - -</p> -->
        </div>
        <hr color="#663BC1">
    </div>

    <div id="konversi">
        <h2>Konversi</h2>

        <div class="konversi">
            
            <div class="konversiKonten">    
                <img class="xl" src="../assets/xl 1.png" alt="XL">
                <br>
                <hr color ="#663BC1">
                <h3>Rate : 0,83</h3>
                <a href="./konversixl.php"><button>Konversi</button></a>
            </div>

            <div class="konversiKonten">    
                <img class="indosat" src="../assets/indosat 1.jpeg" alt="INDOSAT">
                <br>
                <hr color="#663BC1">
                <h3>Rate : 0,87</h3>
                <a href="./konversiindosat.php"><button>Konversi</button></a>
            </div>

            <div class="konversiKonten">    
                <img class="tri" src="../assets/tri 1.png" alt="3">
                <br>
                <hr color="#663BC1">
                <h3>Rate : 0,85</h3>
                <a href="./konversitri.php"><button>Konversi</button></a>
            </div>

            <div class="konversiKonten">    
                <img class="telkomsel" src="../assets/telkom 1.png" alt="TELKOMSEL">
                <br>
                <hr color="#663BC1">
                <h3>Rate : 0,89</h3>
                <a href="./konversitelkomsel.php"><button>Konversi</button></a>
            </div>
    
        </div>
    </div>

    <div id="tutorial">

        <h2>Tutorial Konversi Pulsa</h2>
        <img src="../assets/tutorial.png" alt="Tutorial Konversi">

    </div>
    
    <div class="footer">
        <p>&#169; Kelompok Warung Convert 5A - 2022</p>
    </div>

</body>
</html>