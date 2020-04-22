<?php
require 'functions.php';
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
  <title>Document</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
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
        <a href="../index.php" style="text-decoration: none; color:black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>