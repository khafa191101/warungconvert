<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/konversi.css">
</head>
<body>

    <div class="container">
        <h1>Konversi</h1>

        <form action="./proseskonversi.php" method = "POST" onsubmit="return Validasi();"> 

            <div class = "konten1">
                <label for="no_hp">Nomor Handphone</label><br>
                <input class="inputan" type="number" id="no_hp" name="no_hp" required placeholder="08123456789"><br>
        
                <label for="nominal">Nominal</label><br>
                <input class="inputan" type="number" id="nominal" name="nominal" required placeholder="Rp. 100000"><br>
                <h3 id="minimal">Minimal Nominal = Rp. 100.000</h3>
                <h3 class="rate">Rate</h3>
                <h3 class="numrate">0.87</h3>
                <hr>
                <h3 class="teks">Uang yang didapat</h3>
                <input type="button" value="Chek" id="submit" required>
                
                <h3 class="uangdidapat"> </h3>
                <input type="hidden" id="uang" name="uang" value=" " required>
            </div>
            
            <div class = "konten2">

                <h2>Info Rekening / E-Wallet</h2>

                <label for="ewallet">Rekening / E-Wallet</label><br>
                <select name="ewallet" id="ewallet">
                    <option value="OVO">OVO</option>
                    <option value="GOPAY">GOPAY</option>
                    <option value="DANA">DANA</option>
                    <option value="BCA">BCA</option>
                    <option value="MANDIRI">MANDIRI</option>
                    <option value="BRI">BRI</option>
                </select>
                
                <label for="nowallet">Nomor Rekening / E-Wallet</label><br>
                <input class="inputan" type="number" id="nowallet" name="nowallet" required placeholder="08123456789"><br>

                <label for="nama">Nama</label><br>
                <input class="inputan" type="text" id="nama" name="nama" required ><br>

            </div>

            <input class="konversi" type="submit" value="Konversi">
        </form>
    </div>

    <script>
        const submit = document.getElementById('submit');
        const nominal = document.getElementById('nominal');
        const uangdidapat = document.querySelector('.uangdidapat');
        const rate = 0.87;
        var no_hp = document.getElementById('no_hp').value;
        submit.addEventListener('click', function(){
            if(nominal.value < 100000){
                alert("Minimal Nominal Yang Konversi = Rp. 100.000");
            }
            else{
            const hasil = nominal.value * rate;
            var a = Math.round(hasil);
            uangdidapat.innerHTML = `Rp. ${a}`;
            const uang = document.getElementById('uang').value=a;
            }
        });
        
        function Validasi(){
            var no_hp = document.getElementById('no_hp').value;
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