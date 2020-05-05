<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}
//Menghubungkan ke file php lainnya
require 'functions.php';
$id = $_GET['Id'];

//Ketika data berhasil dihapus
if (hapus($id) > 0) {
  echo "<script>
  alert('Data Berhasil dihapus!');
  document.location.href = 'admin.php';
  </script>";
} else {
  echo "<script>
alert('Data gagal dihapus!');
document.location.href = 'admin.php';
</script>";
}
