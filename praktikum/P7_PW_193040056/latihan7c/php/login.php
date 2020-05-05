<?php
session_start();
require 'functions.php';

if (isset($_SESSION['login'])) {
  header("Location:admin.php");
  exit;
}
//cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username= '$username'");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($hash == hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
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

      //jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
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
  <title>Login</title>
</head>

<body>
  <h3>Form Login</h3>

  <form action="" method="POST">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password Salah</p>

    <?php endif; ?>
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password" required>
        </label>
      <li>
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>

      <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
      </div>
    </ul>



  </form>
</body>

</html>