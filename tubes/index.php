<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

$laptop = query("SELECT * FROM laptop");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $laptop = cari($_POST['keyword']);
}

?>

<html id="home">

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
    body {
      margin: 0;
      padding: 0;
    }

    /* OptionBar */
    .optionbar {
      background-color: #E31C11;
      padding: 15px 0;
      margin-top: 150px;
      height: 70px;
    }

    .optionbar .container {
      margin-right: 50px;
    }

    .cart-option {
      float: right;
      margin: 0 30px 0 0;
    }

    .cart-option ul li {
      float: left;
      text-transform: uppercase;
      padding-left: 80px;
      list-style: none;
      margin-left: -30px;
      font-family: 'Times New Roman', Times, serif;
      color: white;
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      display: block !important;
    }

    /* Official store */
    #store {

      background-image: url('assets/img/store.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }

    #store h3 {
      text-align: center;
      font-weight: 800;
      font-family: 'Times New Roman', Times, serif;
      margin-top: -20px;
      color: black;
    }

    #store img {
      margin-top: -60px;
      height: 250px;
      width: 320px;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <div class="container-fluid">
      <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-white">

        <div class="navbar-header">
          <a class="navbar-brand page-scroll" href="#home">
            <img src="assets/img/logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
          </a>
        </div>

        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon ml-auto"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarNav">
          <div class="ml ml-auto">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php/about.php">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#searching">Produk</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
    </nav>

    <!-- Option Bar -->
    <div class="optionbar col-md">
      <div class="container-fluid">
        <div class="cart-option">
          <ul>
            <li><a href="php/login.php"><img src="assets/img/login.png" title="Login/Register" alt=""></a></li>
          </ul>

        </div>
      </div>

    </div>

  </header>

  <!-- Slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/slide1.jpg" height="500px;" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide3.jpg" height="500px;" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide2.jpg" height="500px;" alt="Third slide">
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



  <!-- Official store -->
  <div class="jumbotron jumbotron-fluid" id="store">
    <div class="d-flex justify-content-center">
      <h3 class="display-4">Official Partner</h3>
    </div>
    <div class="d-flex justify-content-center">
      <img src="assets/img/ASUS.png" alt="">
    </div>
  </div>

  <!-- Searching -->
  <div class="container col-md">
    <div class="row pt-5" id="searching">
      <form action="#container" method="POST" style="margin-left: 20px;">
        <input type="text" name="keyword" size="50" placeholder="Cari Produk Laptop Asus" autocomplete="off" class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Search</button>
      </form>
    </div>

    <div class="live">

      <section class="laptop">
        <?php if (empty($laptop)) : ?>
          <h1>Produk tidak tersedia</h1>
        <?php else : ?>
          <div class="row pt-5">
            <?php foreach ($laptop as $l) : ?>
              <div class="col-sm-4 mb-3">
                <div class="card mt-3">
                  <img src="assets/img/<?= $l['Foto']; ?>" class="card-img-top img-fluid" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-tittle"><?= $l['Nama']; ?></h5>
                    <a href="php/detail.php?id=<?= $l['Id']; ?>" class="btn btn-danger">Detail</a>

                  </div>

                </div>

              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          </div>


      </section>
    </div>
  </div>

  <footer class="text-white" style="background-color: #E31C11;">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p>Copyright 2020.</p>
        </div>

      </div>
    </div>

  </footer>



  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    $('.carousel').carousel({
      interval: 2500
    })
  </script>
</body>

</html>