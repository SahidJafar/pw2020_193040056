<?php
require 'functions.php';
session_start();
if (isset($_SESSION['login'])) {
  header("Location: admin.php");
  exit;
}


if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Username/Password berhasil ditambahkan silahkan login');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
    alert('Registrasi Gagal');
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
  <title>Registrasi</title>
  <style>
    .regist {
      width: 500px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;

    }

    .regist h1 {
      color: black;
      text-transform: uppercase;
      font-weight: 500;
      text-align: center;
    }

    .c-fld_hint {
      margin-top: 2px;
      font-size: 15px;
      text-align: left;

      line-height: 1.4;
      color: #999;
    }

    .c-fld_hint i {
      padding-left: 5px;
    }

    .regist p {
      margin-top: 5px;
      font-weight: 900;
      font-size: 20px;
    }

    .regist p a {
      color: blue;
      text-decoration: none;
    }

    .regist p a:hover {
      color: red;
    }

    .regist input[type="text"],
    .regist input[type="password"] {

      margin: 20px -50px;
      text-align: center;
      padding: 14px 10px;
      width: 500px;

    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-white">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
        </a>
      </div>
    </div>
  </nav>

  <!-- Form Registrasi -->
  <form class="regist" action="" method="POST">
    <h1>Daftar Akun Baru</h1>
    <input type="text" name="username" placeholder="Masukan Username yang anda inginkan" autofocus autocomplete="off" required>
    <input type="password" name="password1" placeholder="Masukan Password yang anda inginkan" required>
    <div class="c-fld_hint" title="Warning!">
      Password harus terdiri lebih dari 5 huruf/digit<i class="fas fa-exclamation-circle"></i>
    </div>
    <input type="password" name="password2" placeholder="Masukan Konfirmasi Password" required>
    <p>Sudah Punya Akun? Silahkan Login <a href="login.php">Disini</a></p>
    <input type="submit" name="register" value="Registrasi" class="btn-danger">

  </form>

  <!-- Optional JavaScript -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>