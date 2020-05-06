<?php
session_start();
require 'functions.php';

if (isset($_SESSION['login'])) {
  header("Location:admin.php");
  exit;
}



// Ketika tombol login ditekan
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  //Mencoba memasukan Username dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <title>Login</title>

  <!-- MYCSS -->
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color: #E31C11;
    }

    .box {
      width: 500px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      text-align: center;
      border-radius: 5%;
    }

    .box h1 {
      color: black;
      text-transform: uppercase;
      font-weight: 500;
    }

    .box input[type="text"],
    .box input[type="password"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #db001a;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: black;
      border-radius: 24px;
      transform: 0, 25s;

    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus {
      width: 280px;
      border-color: #8200b5;
    }

    .box input[type="submit"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #8200b5;
      padding: 14px 40px;
      outline: none;
      color: red;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }

    .box input[type="submit"]:hover {
      background: #8200b5;
    }
  </style>
</head>

<body>


  <form class="box" action="" method="POST">
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password Salah</p>

    <?php endif; ?>
    <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="checkbox" name="remember">
    <label for="remember">Remember me</label>
    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    <input type="submit" name="login" value="Login">




  </form>

  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>