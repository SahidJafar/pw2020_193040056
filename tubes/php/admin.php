<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

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
      position: relative;
      z-index: 0;
      top: 20px;
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
        <a href="logout.php" onclick="return confirm('Yakin meninggalkan halaman admin?')"> <i class="fas fa-sign-out-alt mr-3 fa-2x " data-toogle="tooltip" title="Sign Out"></a></i>
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
          <a class="nav-link text-white" href="produk.php"><i class="fas fa-laptop mr-2"></i>Produk</a>
          <hr class="bg-bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-plus mr-2"></i>Tambah Produk</a>
          <hr class="bg-bg-secondary">
        </li>
      </ul>
    </div>

    <!-- Dashboard -->
    <div class="col-md-5 p-4 pt-5">
      <h3><i class="fas fa-dungeon mr-3 ">DASHBOARD</i></h3>
      <div class="container mt-5">
        <h1 style="text-align: center;">SELAMAT DATANG</h1>
        <h5 style="text-align: center;">di Ruang Portal Admin Acep Store</h5>
      </div>
      <div class="row text-white mt-5 justify-content-center">
        <div class="card bg-info ml-3 mb-2" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-laptop mr-2"></i>
            </div>
            <?php
            $laptop = query("SELECT Nama FROM laptop");
            $hitunglaptop = count($laptop); ?>

            <h5 class="card-title">Total of Product</h5>
            <div class="display-4"><?php echo $hitunglaptop; ?></div>
          </div>
        </div>
        <div class="card bg-success ml-3 mb-2" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-users"></i>
            </div>
            <?php
            $user = query("SELECT username FROM user");
            $hitunguser = count($user); ?>
            <h5 class="card-title">Total of Admin</h5>
            <div class="display-4"><?php echo $hitunguser; ?></div>
          </div>
        </div>
      </div>
      <!-- Contact -->
      <section id="Contact" class="Contact mb-5">
        <div class="container">
          <div class="row pt-4 mb-4">
            <div class="col text-center">
              <h2>Keluhan Admin</h2>

            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-xs-2">
              <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">Contact Person</h5>
                  <p class="card-text"><a href="https://about.me/sahidjafar"><i class="far fa-paper-plane fa-5x" style="padding-left: 10px;"></p></a></i>
                </div>
              </div>


              <!-- Optional JavaScript -->
              <script src="../js/bootstrap.min.js"></script>
              <script src="../js/admin.js"></script>
              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>