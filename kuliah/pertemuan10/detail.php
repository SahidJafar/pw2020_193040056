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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Detail Mahasiswa</title>
</head>

<body>
  <!-- Navbar -->

  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
      </div>
      <h3> Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <div class="content-responsive-sm" style="margin-top: 150px;">
    <div class="jumbotron bg-light text-center ">
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
    </div>
  </div>



  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>