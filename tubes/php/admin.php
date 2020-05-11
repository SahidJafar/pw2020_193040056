<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

// Searching

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $laptop = query("SELECT * FROM laptop WHERE
  Nama LIKE '%$keyword%' OR
  Processor LIKE '%$keyword%' OR
  Keterangan LIKE '%$keyword%' OR
  Harga LIKE '%$keyword%' ");
} else {
  $laptop = query("SELECT * FROM laptop");
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
      <h3><i class="fas fa-dungeon mr-3 ">DASHBOARD</i></h3>
      <div class="row text-white">
        <div class="card bg-info ml-3 mb-2" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-laptop mr-2"></i>
            </div>
            <h5 class="card-title">Total of Product</h5>
            <div class="display-4">10</div>
            <a href="">
              <p class="card-text text-white">Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
        <div class="card bg-success ml-3 mb-2" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-users"></i>
            </div>
            <h5 class="card-title">Total of User</h5>
            <div class="display-4">10</div>
            <a href="">
              <p class="card-text text-white">Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="card ml-3">
          <div class="card-header bg-danger display-4 pt-4 pb-4">
            <i class="fab fa-instagram ml-4"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-danger">INSTAGRAM</h5>
            <a href="#" class="btn btn-danger">FOLLOW</a>
          </div>
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