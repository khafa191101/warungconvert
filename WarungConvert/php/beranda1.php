<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Convert!</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/beranda1.css">
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
                        <li><a href="./login.php">Masuk</a></li>
                        <li><a href="#konversi">Konversi</a></li>
                        <li><a href="#tutorial">Tutorial</a></li>
                    </ul>
                </nav>  
            </div>
        </div>
    </header>
    <div id="beranda">
        <h1 class="selamat" >Selamat Datang di Warung Convert!</h1>
        <img src="../assets/ilustrasi.png" alt="Selamat Datang">
        <div class="tulisan">
            <p>“Warung Convert” adalah website penukar pulsa menjadi mata uang rupiah (Rp).</p>
            <p>Nikmati kemudahan dalam penukaran pulsa ke dalam mata uang rupiah sesuai dengan nominal yang tertera.</p><br>
            <p> - - -</p>
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
                <h3>Rate : 0,87</h3>
                <input type="button" value="Konversi" id="submit">
            </div>

            <div class="konversiKonten">    
                <img class="indosat" src="../assets/indosat 1.jpeg" alt="INDOSAT">
                <br>
                <hr color="#663BC1">
                <h3>Rate : 0,87</h3>
                <input type="button" value="Konversi" id="submit1">
            </div>

            <div class="konversiKonten">    
                <img class="tri" src="../assets/tri 1.png" alt="3">
                <br>
                <hr color="#663BC1">
                <h3>Rate : 0,87</h3>
                <input type="button" value="Konversi" id="submit2">
            </div>

            <div class="konversiKonten">    
                <img class="telkomsel" src="../assets/telkom 1.png" alt="TELKOMSEL">
                <br>
                <hr color="#663BC1">
                <h3>Rate : 0,87</h3>
                <input type="button" value="Konversi" id="submit3">
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
    <script>
        const btn = document.getElementById('submit');
        const btn1 = document.getElementById('submit1');
        const btn2 = document.getElementById('submit2');
        const btn3 = document.getElementById('submit3');
        btn.addEventListener('click', function(){
            alert('Anda harus login terlebih dahulu!');
        });
        btn1.addEventListener('click', function(){
            alert('Anda harus login terlebih dahulu!');
        });
        btn2.addEventListener('click', function(){
            alert('Anda harus login terlebih dahulu!');
        });
        btn3.addEventListener('click', function(){
            alert('Anda harus login terlebih dahulu!');
        });
    </script>
</body>
</html>