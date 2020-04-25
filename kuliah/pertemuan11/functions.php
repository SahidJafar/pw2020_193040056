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
