<?php
require 'functions.php';

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'latihan3.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Tambah Data Mahasiswa</title>
</head>

<body>

  <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="80" height="80" class="d-inline-block align-top" alt="">
          <h4 style="margin: 5px;"> Ruang Admin </h4>
        </a>
      </div>
      <h3>Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <div class="jumbotron bg-light" style="margin: 100px;">
    <h3>Form Tambah Data Mahasiswa</h3>
    <table border="0" cellspacing="10">
      <form action="" method="POST">
        <tr>
          <label>
            <td>Nama</td>
            <td>:</td>
            <td> <input type="text" name="nama" autofocus required> </td>
          </label>
        </tr>

        <tr>
          <label>
            <td> Nrp </td>
            <td>:</td>
            <td><input type="text" name="nrp" required></td>
          </label>
        </tr>

        <tr>
          <label>
            <td>Email</td>
            <td>:</td>
            <td> <input type="text" name="email" required></td>
          </label>
        </tr>

        <tr>
          <label>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" required></td>
          </label>
        </tr>

        <tr>
          <label>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="text" name="gambar" required></td>
          </label>
        </tr>

        <tr>
          <td><button type="submit" name="tambah">TambahData</button>
          </td>
        </tr>
      </form>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>