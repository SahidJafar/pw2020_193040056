<?php
// Koneksi ke database
$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

// Memilih database
mysqli_select_db($conn, "tubes_193040056") or die ("Database salah!");

// Querry mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM laptop ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index193040056</title>
  <style>
    tr{
      color: blue;
    }
  </style>
</head>
<body>
  <div class ="container">
  <table border="1" cellpadding="5" cellspacing="0" style="text-align " >
  <tr> 
    <th>NO</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Processor</th>
    <th>Keterangan</th>
    <th>Harga</th>
  </tr>

    <?php $i = 1 ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    
    
    <tr> 
    <td><?= $i ?> </td> 
    <td><img src="assets/img/<?= $row['Foto']; ?>" height="300px" width="320px"></td>
      <td><?= $row['Nama']; ?></td>
      <td><?= $row['Processor']; ?></td>
      <td><?= $row['Keterangan']; ?></td>
      <td><?= $row['Harga']; ?></td>

    </tr>
    <?php $i++ ?>  
    <?php endwhile; ?>
     

    </table>
    </div>
</body>
</html