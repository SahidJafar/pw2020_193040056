<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';
$laptop = query("SELECT * FROM laptop");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $laptop = cari($_POST['keyword']);
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

  <title>admin</title>

  <style>
    .nav-link:hover {
      background-color: grey;
    }

    .display-4 {
      font-weight: bold;
    }

    .card-body-icon {
      position: absolute;
      z-index: 0;
      top: 25px;
      right: 4px;
      opacity: 0.4;
      font-size: 90px;
    }

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
        <a href="logout.php" onclick="return confirm('Yakin meninggalkan halaman admin?')"> <i class="fas fa-sign-out-alt mr-3 fa-2x " data-toogle="tooltip" title="Sign Out"></i></a>
      </h5>
    </div>
    </div>
  </nav>

  <div class="row no-gutters" style="margin-top: 100px;">
    <div class="col-md-2 bg-dark  pr-3 pt-4" style="margin-top: -5px; position: relative;">
      <ul class="nav flex-column mt-2 ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="admin.php"><i class="fas fa-dungeon mr-2"></i>Dasboard</a>
          <hr class="bg-bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="produk.php"><i class="fas fa-laptop mr-2"></i>Produk</a>
          <hr class="bg-bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-plus mr-2"></i>Tambah Produk</a>
          <hr class="bg-bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-5 p-5 pt-4">
      <h3><i class="fas fa-laptop mr-2">PRODUK</i></h3>
      <div class="row">
        <form action="" method="POST">
          <input type="text" name="keyword" placeholder="Search for Product" autocomplete="off" autofocus>
          <button type="submit" name="cari" class="tombol-cari">Cari!</button>
        </form>
      </div>

      <table class="table-responsive-sm" border="1" cellpadding="13" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Processor</th>
            <th>Keterangan</th>
            <th>Harga</th>
          </tr>
          <?php if (empty($laptop)) : ?>
            <tr>
              <td colspan="7">
                <h1>Data tidak ditemukan</h1>
              </td>
            </tr>
        </thead>

        <tbody>
        <?php else : ?>
          <?php $i = 1; ?>
          <?php foreach ($laptop as $l) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td>
                <button title="ubah"><a href="ubah.php?Id=<?= $l['Id']; ?>"><i class="fas fa-wrench"></a></i></button>
                <button title="hapus"><a href="hapus.php?Id=<?= $l['Id']; ?>" onclick="return confirm('Hapus Data??')"><i class="fas fa-trash-alt"></a></i></button>
              </td>
              <td><img src="../assets/img/<?= $l['Foto']; ?>" height="300px" width="320px" alt=""></td>
              <td><?= $l['Nama']; ?></td>
              <td><?= $l['Processor']; ?></td>
              <td><?= $l['Keterangan']; ?></td>
              <td><?= $l['Harga']; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>