<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}
//Mengubungkan ke fili php lainnya
require 'functions.php';
//Ketika data berhasil ditambahkan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
        alert('Data berhasil ditambahkan');
        document.location.href = 'admin.php';      
    </script>";
  } else {
    echo "<script> 
    alert('Data gagal ditambahkan');
    document.location.href = 'admin.php';      
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link Font Awesome -->
  <link rel="stylesheet" href="../font/css/all.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Jquery -->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>


  <title>Tambah</title>
  <style>
    .navbar a {

      text-decoration: none;
    }
  </style>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
    </a>
    <div class="icon ml-auto">
      <h5>
        <a href="../index.php"> <i class="fas fa-sign-out-alt mr-3 fa-2x " data-toogle="tooltip" title="Sign Out"></i></a>
      </h5>
    </div>
    </div>
  </nav>

  <div class="row no-gutters" style="margin-top: 100px;">
    <div class="col-md-2 bg-dark pr-3 pt-4" style="margin-top: -5px; position: relative;">
      <ul class="nav flex-column mt-2 ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="admin.php"><i class="fas fa-dungeon mr-2"></i>Dasboard</a>
          <hr class="bg-bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="produk.php"><i class="fas fa-laptop mr-2"></i>Products</a>
          <hr class="bg-bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-plus mr-2"></i>Add Product</a>
          <hr class="bg-bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-5 p-5 pt-4">
      <h3>ADD PRODUCT</h3>
      <div class="row">
        <form action="" method="POST">
          <ul>
            <li>
              Foto <br>
              <label for="Foto"></label>
              <input type="text" name="foto" id="Foto" required><br><br>
            </li>

            <li>
              Nama <br>
              <label for="Nama"></label>
              <input type="text" name="nama" id="Nama" required><br><br>
            </li>

            <li>
              Processor <br>
              <label for="Processor"></label>
              <input type="text" name="processor" id="Processor" required><br><br>
            </li>

            <li>
              Keterangan <br>
              <label for="Keterangan"></label>
              <textarea name="keterangan" id="Keterangan" cols="50" rows="10" required></textarea><br><br>
            </li>

            <li>
              Harga <br>
              <label for="Harga"></label>
              <input type="text" name="harga" id="Harga" required>
            </li>
            <br>

            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
              <a href="admin.php" style="text-decoration: none; color:black;">Kembali</a>
            </button>
          </ul>
        </form>
      </div>

      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/admin.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>