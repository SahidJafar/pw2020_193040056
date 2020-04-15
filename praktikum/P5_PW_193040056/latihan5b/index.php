<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan querry
$laptop = query("SELECT * FROM laptop")
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
    <?php foreach ($laptop as $l) : ?>
    
    
    <tr> 
    <td><?= $i ?> </td> 
    <td><img src="assets/img/<?= $l['Foto']; ?>" height="300px" width="320px"></td>
      <td><?= $l['Nama']; ?></td>
      <td><?= $l['Processor']; ?></td>
      <td><?= $l['Keterangan']; ?></td>
      <td><?= $l['Harga']; ?></td>

    </tr>
    <?php $i++ ?>  
    <?php endforeach; ?>
     

    </table>
    </div>
</body>
</html