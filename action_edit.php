<?php

require_once("koneksi.php");

if (isset($_POST["kode_barang"])) $kode_barang = $_POST["kode_barang"];
else echo "Kode Salah atau Tidak ditemukan ! <a href'index.php'>Kembali</a>";

$query = "SELECT * FROM barang WHERE kode_barang = '{$kode_barang}'";
$result = mysqli_query($mysqli, $query);

// if ( isset($_POST["nis"]) ) $nis = $_POST["nis"];
// else {
//     echo "NIS TIdak Ditemukan! <a href'index.php'>Kembali</a>";
//     exit();
// }
// $query = "SELECT * FROM siswa WHERE nis = '{$nis}'";
// $result = mysqli_query($mysqli, $query);

foreach ($result as $siswa) {
    $foto = $siswa["foto"];
    $kode_barang = $siswa["kode_barang"];
    $nama_barang = $siswa["nama_barang"];
    $harga = $siswa["harga"];
    $qty = $siswa["qty"];
    $tanggal = $siswa["tanggal"];

    // $maleChecked = "";
    // $femaleChecked = "";
    
}


// if ( isset($_POST['name']) ) $name = $_POST['name'];

// if ( isset($_POST['gender']) ) $gender = $_POST['gender'];

// if ( isset($_POST['address']) ) $address = $_POST['address'];

// if ( isset($_POST['placeOfBirth']) ) $placeOfBirth = $_POST['placeOfBirth'];

// if ( isset($_POST['dateOfBirth']) ) $dateOfBirth = $_POST['dateOfBirth'];

// if ( isset($_POST['phone']) ) $phone = $_POST['phone'];

if ( isset($_POST['nama_barang']) ) $nama_barang = $_POST['nama_barang'];

if ( isset($_POST['harga']) ) $harga = $_POST['harga'];

if ( isset($_POST['qty']) ) $qty = $_POST['qty'];

if ( isset($_POST['tanggal']) ) $tanggal = $_POST['tanggal'];

$files = $_FILES['foto'];
$path = "penyimpanan/";


if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ($upload) {
        unlink($foto);
    }
}
else {
    $filepath = $foto;
    $upload = false;
}

if ($upload != true && $filepath != $foto ) {
    exit("Gagal Mengupload File <a href='form_edit.php?nis={$nis}'>kembali</a>");
}


$query = "
    UPDATE barang SET
        nama_barang = '{$nama_barang}',
        harga = '{$harga}',
        qty = '{$qty}',
        tanggal = '{$tanggal}',
        foto = '{$filepath}'
    WHERE kode_barang = '{$kode_barang}'";
    
$insert = mysqli_Query($mysqli, $query);

if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}

?>
