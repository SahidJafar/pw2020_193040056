<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location:login.php");
  exit;
}

//Menghubungkan dengan file php lainnya
require 'functions.php';

$id = $_GET['Id'];
$l = query("SELECT * FROM laptop WHERE Id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
        alert('Data berhasil diubah');
        document.location.href = 'admin.php';      
    </script>";
  } else {
    echo "<script> 
    alert('Data gagal diubah');
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
  <title>Ubah</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="Id" value="<?= $l['Id']; ?>">
    <ul>

      <li>
        Foto <br>
        <label for="Foto"></label>
        <input type="text" name="foto" id="Foto" required value="<?= $l['Foto']; ?>"><br><br>
      </li>

      <li>
        Nama <br>
        <label for="Nama"></label>
        <input type="text" name="nama" id="Nama" required value="<?= $l['Nama']; ?>"><br><br>
      </li>

      <li>
        Processor <br>
        <label for="Processor"></label>
        <input type="text" name="processor" id="Processor" required value="<?= $l['Processor']; ?>"><br><br>
      </li>

      <li>
        Keterangan <br>
        <label for="Keterangan"></label>
        <textarea type="text" name="keterangan" id="Keterangan" cols="50" rows="3" required value><?= $l['Keterangan']; ?></textarea><br><br>
      </li>

      <li>
        Harga <br>
        <label for="Harga"></label>
        <input type="text" name="harga" id="Harga" required value="<?= $l['Harga']; ?>">
      </li>
      <br>

      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color:black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>