<?php

require '../php/functions.php';

$laptop = cari($_GET['keyword']);
?>
<section class="laptop">
  <?php if (empty($laptop)) : ?>
    <h1>Data tidak ditemukan</h1>

  <?php else : ?>
    <div class="container">

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