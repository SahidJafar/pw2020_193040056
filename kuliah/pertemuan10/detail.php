<?php
//Mengecek apakah ada id yang dikirimkan
//Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: latihan3.php");
  exit;
}
require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//Melakukan query dengan parameter id yang diambil dari url
$mahasiswa = query("SELECT * FROM mahasiswa WHERE Id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <div class="container">
    <div class="Gambar">
      <img src="img/<?= $mahasiswa['Gambar']; ?>" width="320px" alt="">
    </div>

    <div class="keterangan">
      <p><?= $mahasiswa['Nama']; ?></p>
      <p><?= $mahasiswa['Nrp']; ?></p>
      <p><?= $mahasiswa['Email']; ?></p>
      <p><?= $mahasiswa['Jurusan']; ?></p>

    </div>

    <button class="tombol-kembali"><a href="latihan3.php">Kembali</a></button>
  </div>
</body>

</html>