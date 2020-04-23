<?php
//Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040056');

//Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data ke dalam array
//$row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array();  // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//tampung ke variabel mahasiswa
$mahasiswa = $rows;
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


  <title>Daftar Mahasiswa</title>
</head>

<body>
  <!-- Navbar -->

  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="80" height="80" class="d-inline-block align-top" alt="">
        </a>
      </div>
      <h3> Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <!-- Daftar Mahasiswa -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron bg-light text-center">
          <h3 style="margin: 150px;">DAFTAR MAHASISWA</h3>

          <!-- Tabel -->
          <div class="table-responsive" style="margin-top: -50px;">
            <table class="table table-table-responsive-sm table-bordered table-striped table-hover" border=" 1" cellpadding="10" cellspacing="5" align="center">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Nrp</th>
                  <th>Email</th>
                  <th>Jurusan</th>
                  <th>Gambar</th>
                  <th>Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $m) : ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $m['Nama']; ?></td>
                    <td><?= $m['Nrp']; ?></td>
                    <td><?= $m['Email']; ?></td>
                    <td><?= $m['Jurusan']; ?></td>
                    <td><img src="img/<?= $m['Gambar']; ?>" width="60"></td>
                    <td>
                      <a href="">ubah</a> | <a href="">hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>