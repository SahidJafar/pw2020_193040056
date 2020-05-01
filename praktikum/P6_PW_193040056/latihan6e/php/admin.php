<?php
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
  <title>admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>

    <form action="" method="GET">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
  </div>
  <table border="1" cellpadding="13" cellspacing="0">
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
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($laptop as $l) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <button><a href="ubah.php?Id=<?= $l['Id']; ?>">Ubah</a></button>
            <button><a href="hapus.php?Id=<?= $l['Id']; ?>" onclick="return confirm('Hapus Data??')">Hapus</a></button>
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
  </table>

</body>

</html>