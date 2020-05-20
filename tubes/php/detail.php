<?php
//Mengecek apakah ada id yang dikirimkan
//Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//Melakukan query dengan parameter id yang diambil dari url
$laptop = query("SELECT * FROM laptop WHERE Id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Jquery -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <title>Detail</title>

    <!-- MYCSS -->

    <style>
        .Foto {
            width: 300px;
            float: left;
            margin-right: 100px;
        }

        button a {
            color: white;
        }

        button a:hover {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <div class="container-fluid">
        <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-white">

            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#home">
                    <img src="../assets/img/logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
                </a>
            </div>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon ml-auto"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <div class="ml ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link page-scroll" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="../index.php#searching">Produk</a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </nav>

    <!-- Detail -->
    <div class="container container-fluid align-content-center " style="margin-top: 200px;">
        <div class="Foto">
            <img class="Foto" src="../assets/img/<?= $laptop["Foto"]; ?>" class="img-fluid" alt="">
        </div>

        <div class="keterangan">
            <h1><?= $laptop["Nama"]; ?></h1>
            <p><?= $laptop["Processor"]; ?></p>
            <p><?= $laptop["Keterangan"]; ?></p>
            <p><?= $laptop["Harga"]; ?></p>

        </div>

        <button type="button" class="btn btn-danger btn-lg"><a href="../index.php">Kembali</a></button>
    </div>


    <!-- Optional JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>