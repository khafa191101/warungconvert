<?php
    include './koneksi.php';
    session_start();
    $nohp = $_SESSION['nohp'];
    $nominal = $_SESSION['nominal'];
    $ewallet = $_SESSION['ewallet'];
    $nowallet = $_SESSION['nowallet'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bridge.css">
    <title>Document</title>
</head>
<body>
    <h1>UNTUK MELANJUTKAN TRANSAKSI SILAHKAN KLIK TOMBOL LANJUTKAN</h1>
    <div class="tombol">
        <button>
            <a href="https://wa.me/6281311111111/?text=Halo aku sudah isi data untuk convert pulsa dengan Nomor HP <?= $nohp; ?>, Nominal <?= $nominal; ?>, E-wallet <?=$ewallet?>, No Wallet <?=$nowallet ?>" >LANJUTKAN</a>
        </button>
    </div>
</body>
</html>