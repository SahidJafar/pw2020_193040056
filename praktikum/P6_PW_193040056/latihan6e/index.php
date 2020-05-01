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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title>index193040056</title>

  <!-- MYCSS -->
  <style>

  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-white">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="assets/img/logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
        </a>
      </div>
    </div>
  </nav>


  <!-- Slider -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active mb-5">
        <img src="assets/img/slide1.jpg" height="550px" width="auto" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slide3.jpg" height="550px" width="auto" class="d-block w-100 image2" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider2.jpg" height="550px" width="auto" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <section class="laptop">
    <div class="container" id="container">
      <div class="row pt-5">

        <?php foreach ($laptop as $l) : ?>

          <div class="col-sm-3 mb-3">
            <div class="card  mt-3">
              <img class="card-img-top" src="assets/img/<?= $l['Foto'] ?>" alt="Card image cap" height="200" width="150">
              <div class="card-body">
                <h5 class="card-title"><?= $l["Nama"] ?></h5>
                <a href="php/detail.php?Id=<?= $l['Id'] ?>" class="btn btn-danger">Detail</a>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>
    </div>
  </section>




  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
</body>

</html