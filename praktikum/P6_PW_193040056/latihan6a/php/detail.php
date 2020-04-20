<?php
//Mengecek apakah ada id yang dikirimkan
//Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])){
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//Melakukan query dengan parameter id yang diambil dari url
$laptop = query("SELECT * FROM laptop WHERE Id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="Foto">
    <img src="../assets/img/<?= $laptop["Foto"]; ?>" height="300px" width="320px" alt="">
    </div>

    <div class="keterangan">
    <p><?= $laptop["Nama"]; ?></p>
    <p><?= $laptop["Processor"]; ?></p>
    <p><?= $laptop["Keterangan"]; ?></p>
    <p><?= $laptop["Harga"]; ?></p>

    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>