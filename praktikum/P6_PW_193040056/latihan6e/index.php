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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title>index193040056</title>
</head>

<body style="background-color: black;">
  <!-- NAVBAR -->
  <nav class="navbar  fixed-top navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="assets/img/ASUS.png" width="120" height="80" class="d-inline-block align-top" alt="">
        </a>
      </div>
      <h4 style="color: black">IN SEARCH OF INCREDIBLE</h4>
    </div>
  </nav>

  <!-- Jumbotron ROG -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid " style="background-color: black; margin-top: 100px;">
          <div class="container text-center">
            <img src="assets/img/ROG.png" alt="" class="display-4">
            <h1 class="lead" style="margin-top: 20px; font-size: 50px; color: red;">REPUBLIC OF GAMERS</h1>
          </div>
        </div>
      </div>
      <div>


        <div class="container">
          <?php foreach ($laptop as $l) : ?>
            <p class="Nama">
              <a href="php/detail.php?id=<?= $l['Id'] ?>">
                <?= $l['Nama'] ?>

              </a>
            </p>

          <?php endforeach; ?>

        </div>
        <!-- Optional JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html