<?php
// function untuk  melakukan koneksi ke database
function Koneksi(){
$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");
mysqli_select_db($conn, "tubes_193040056") or die ("Database salah!");

return $conn;
}

// function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
$result = mysqli_query($conn, "$sql");

$rows= [];
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
    return $rows;
}
?>
