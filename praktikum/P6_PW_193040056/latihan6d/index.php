<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan querry
$laptop = query("SELECT * FROM laptop")
?>

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


    /* Official store */
    #store {
      height: 350px;
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
      height: 350px;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-white">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
          </a>
        </div>
      </div>
    </nav>

    <!-- Option Bar -->
    <div class="optionbar col-md">
      <div class="container">
        <div class="cart-option">
          <ul>
            <li><a href="php/admin.php"><img src="assets/img/login.png" title="Admin" alt=""></li></a>
          </ul>

        </div>
      </div>

    </div>

  </header>

  <!-- Slider -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade col-md" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/slide1.jpg" height="550px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slide3.jpg" height="550px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider2.jpg" height="550px" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
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
    <div class="row pt-5">
      <form action="#container" method="POST" style="margin-left: 20px;">
        <input type="text" name="keyword" size="50" placeholder="Search for Product" autocomplete="off">
        <button type="submit" name="cari">Search</button>
      </form>
    </div>
  </div>
  <?php if (empty($laptop)) : ?>
    <h1>Data tidak ditemukan</h1>

  <?php else : ?>
    <section class="laptop">
      <div class="container" id="container">

        <div class="row pt-5">

          <?php foreach ($laptop as $l) : ?>

            <div class="col-sm-4 mb-3">
              <div class="card  mt-3">
                <img class="card-img-top" src="assets/img/<?= $l['Foto'] ?>" alt="Card image cap" height="200" width="150">
                <div class="card-body">
                  <h5 class="card-title"><?= $l["Nama"] ?></h5>
                  <a href="php/detail.php?id=<?= $l['Id'] ?>" class="btn btn-danger">Detail</a>
                </div>
              </div>
            </div>

          <?php endforeach ?>
        <?php endif; ?>
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
        interval: 2500
      })
    </script>
</body>

</html