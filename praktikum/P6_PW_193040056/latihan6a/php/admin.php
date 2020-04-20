<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$laptop = query("SELECT * FROM laptop");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Processor</th>
      <th>Keterangan</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($laptop as $l) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $l['Foto']; ?>" height="300px" width="320px" alt=""></td>
        <td><?= $l['Nama']; ?></td>
        <td><?= $l['Processor']; ?></td>
        <td><?= $l['Keterangan']; ?></td>
        <td><?= $l['Harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>

</body>

</html>