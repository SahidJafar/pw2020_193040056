<?php
// Menghubungkan dengan file php lainnya

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['Id'];



if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
        alert('Data berhasil diubah');
        document.location.href = 'produk.php';      
    </script>";
  } else {
    echo "<script> 
    alert('Data gagal diubah');
    document.location.href = 'produk.php';      
    </script>";
  }
}
$l = query("SELECT * FROM laptop WHERE Id = $id")[0];

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

  <title>Ubah</title>

  <!-- MYCSS -->
  <style>
    .ubah ul li {
      list-style: none;
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
        <a href="logout.php"> <i class="fas fa-sign-out-alt mr-3 fa-2x " data-toogle="tooltip" title="Sign Out"></i></a>
      </h5>
    </div>
    </div>
  </nav>

  <div class="container " style="margin-top: 200px;">
    <h3>Form Ubah Data Produk</h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="Id" value="<?= $l['Id']; ?>">
      <ul>

        <li>
          <input type="hidden" name="foto_lama" value="<?= $l['Foto']; ?>">
          <input type="file" name="Foto" class="photo" onchange="previewImage()"><br><br>
          <label>
            Foto :
            <?= $l['Foto']; ?>
          </label>
          <img src="../assets/img/<?= $l['Foto']; ?>" class="img-preview" width="120px;" style="display: block;  position: relative;"></td>
        </li>

        <li>
          Nama <br>
          <label for=" Nama"></label>
          <input type="text" name="Nama" id="Nama" required value="<?= $l['Nama']; ?>"><br><br>
        </li>

        <li>
          Processor <br>
          <label for="Processor"></label>
          <input type="text" name="Processor" id="Processor" required value="<?= $l['Processor']; ?>"><br><br>
        </li>

        <li>
          Keterangan <br>
          <label for="Keterangan"></label>
          <textarea type="text" name="Keterangan" id="Keterangan" cols="50" rows="3" required><?= $l['Keterangan']; ?></textarea><br><br>
        </li>

        <li>
          Harga <br>
          <label for="Harga"></label>
          <input type="text" name="Harga" id="Harga" required value="<?= $l['Harga']; ?>">
        </li>
        <br>

        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
          <a href="produk.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
      </ul>
    </form>

    <!-- Optional JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>