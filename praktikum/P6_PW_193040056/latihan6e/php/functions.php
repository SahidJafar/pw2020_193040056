<?php
// function untuk  melakukan koneksi ke database
function Koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040056") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $processor = htmlspecialchars($data['processor']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO laptop
                    VALUES
                    ('','$foto','$nama','$processor','$keterangan','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Hapus

function Hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM laptop WHERE Id = $id");

    return mysqli_affected_rows($conn);
}

// Ubah Data
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['Id']);
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $processor = htmlspecialchars($data['processor']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE laptop
                SET
                foto ='$foto',
                nama ='$nama',
                processor ='$processor',
                keterangan ='$keterangan',
                harga ='$harga'
                WHERE Id = '$id' 
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
