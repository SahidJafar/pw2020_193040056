<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Nrp</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Gambar</th>
      <th>Aksi</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['Nrp']; ?></td>
        <td><?= $m['Email']; ?></td>
        <td><?= $m['Jurusan']; ?></td>
        <td><img src="img/<?= $m['Gambar']; ?>" width="60"></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>