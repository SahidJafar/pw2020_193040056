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

//Tambah Data
function upload()
{
    $nama_file = $_FILES['Foto']['name'];
    $tipe_file = $_FILES['Foto']['type'];
    $ukuran_file = $_FILES['Foto']['size'];
    $error = $_FILES['Foto']['error'];
    $tmp_file = $_FILES['Foto']['tmp_name'];

    // Ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        // alert('Pilih gambar terlebih dahulu')
        // </script>";
        return 'nophoto.jpg';
    }

    //Cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
    alert('Yang anda pilih bukan gambar!')
    </script>";
        return false;
    }

    // Cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/jpg') {
        echo "<script>
    alert('Yang anda pilih bukan gambar!')
    </script>";
        return false;
    }

    // Cek ukuran file
    // maksimal 5mb == 5000000 byte
    if ($ukuran_file > 5000000) {
        echo "<script>
    alert('Ukuran terlalu besar!')
    </script>";
        return false;
    }

    // Lolos Pengecekan
    // Siap Upload File
    // Generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);
    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();
    // Upload Gambar


    // $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $processor = htmlspecialchars($data['processor']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = htmlspecialchars($data['harga']);

    $Foto = upload();
    if (!$Foto) {
        return false;
    }


    $query = "INSERT INTO laptop
                    VALUES
                    (NULL,'$Foto','$nama','$processor','$keterangan','$harga')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Hapus

function hapus($id)
{
    $conn = koneksi();

    // Menghapus gambar di folder img
    $l = query("SELECT * FROM laptop WHERE Id =$id")[0];
    if ($l['Foto'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $l['Foto']);
    }
    mysqli_query($conn, "DELETE FROM laptop WHERE Id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Ubah Data
function ubah($data)
{
    $conn = koneksi();
    $id = $data['Id'];
    $foto_lama = htmlspecialchars($data['foto_lama']);
    $nama = htmlspecialchars($data['Nama']);
    $processor = htmlspecialchars($data['Processor']);
    $keterangan = htmlspecialchars($data['Keterangan']);
    $harga = htmlspecialchars($data['Harga']);


    $Foto = upload();
    if (!$Foto) {
        return false;
    }
    if ($Foto == 'nophoto.jpg') {
        $Foto = $foto_lama;
    }

    $query = "UPDATE laptop
                SET
                Foto ='$Foto',
                Nama ='$nama',
                Processor ='$processor',
                Keterangan ='$keterangan',
                Harga ='$harga'
                WHERE Id ='$id'";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// Searching
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM laptop
                  WHERE 
             Nama LIKE '%$keyword%' OR
             Processor LIKE '%$keyword%' OR
             Keterangan LIKE '%$keyword%'OR
             Harga LIKE '%$keyword%'
            ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
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
               (NULL, '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
