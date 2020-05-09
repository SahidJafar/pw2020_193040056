<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040056');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp =  htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
            mahasiswa
            VALUES
            (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// Hapus
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE Id =$id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
// Ubah Data
function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa
                SET
                Nama ='$nama',
                Nrp ='$nrp',
                Email ='$email',
                Jurusan ='$jurusan',
                Gambar ='$gambar'
                WHERE Id = '$id' 
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// Searching
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
                  WHERE 
             Nama LIKE '%$keyword%' OR
             Nrp LIKE '%$keyword%' OR
             Email LIKE '%$keyword%'OR
             Jurusan LIKE '%$keyword%'
            ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


// Login
function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  //cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // Cek Password
    if (password_verify($password, $user['password'])) {

      // set session
      $_SESSION['login'] = true;
      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}


// Registrasi
function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
    alert('username/password tidak boleh kosong!');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  //Jika Username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
    alert('username  sudah terdaftar');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  //Jika konfirmasi tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
    alert('Konfirmasi Password tidak sesuai');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // Jika password <5digit
  if (strlen($password1) < 5) {
    echo "<script>
    alert('Password terlalu pendek!');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // Jika username & password sudah sesuai
  // enkripsi password

  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke tabel user
  $query = "INSERT INTO user
                VALUES
             (null, '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
