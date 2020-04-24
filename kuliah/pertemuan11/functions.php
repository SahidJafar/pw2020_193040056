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
  $id = htmlspecialchars($data['id']);
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "UPDATE mahasiswa
                SET
                Nama ='$nama',
                Nrp ='$nrp',
                Email ='$email',
                Jurusan ='$jurusan',
                Gambar ='$gambar'
                WHERE id = '$id' 
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
