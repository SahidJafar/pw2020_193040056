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
</head>
<body>
  <div class ="container">
    <?php foreach ($laptop as $l) : ?>
    <p class = "Nama">
    <a href="php/detail.php?id=<?= $l['Id'] ?>">
      <?= $l['Nama'] ?>

      </a>
      </p>
  
    <?php endforeach; ?>
     
  </div>
</body>
</html