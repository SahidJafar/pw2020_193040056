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

    $foto = htmlspecialchars($data['Foto']);
    $nama = htmlspecialchars($data['Nama']);
    $processor = htmlspecialchars($data['Processor']);
    $keterangan = htmlspecialchars($data['Keterangan']);
    $harga = htmlspecialchars($data['Harga']);

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
