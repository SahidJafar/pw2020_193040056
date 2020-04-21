<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Daftar Mahasiswa</title>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="80" height="80" class="d-inline-block align-top" alt="">
        </a>
      </div>
      <h3>Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <div class="jumbotron bg-light">

    <h3>Daftar Mahasiswa</h3>

    <a href="">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Aksi</th>

      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $m['Nama']; ?></td>
          <td><img src="img/<?= $m['Gambar']; ?>" width="60"></td>
          <td>
            <a href="detail.php?id=<?= $m['Id']; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>

    </table>

    <!-- Optional JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>