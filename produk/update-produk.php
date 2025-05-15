<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$id               = $_POST['id'];
$nama_produk      = $_POST['nama_produk'];
$harga            = $_POST['harga'];
$stok             = $_POST['stok'];
$deskripsi        = $_POST['deskripsi'];

// query update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET 
            nama_produk = '$nama_produk', 
            harga       = '$harga', 
            stok        = '$stok',
            deskripsi   = '$deskripsi' 
          WHERE id = '$id'";

// kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    // redirect ke halaman daftar-produk.php
    header("Location: index.php");
} else {
    // pesan error gagal update data
    echo "Data Gagal Diupdate! Error: " . $koneksi->error;
}

?>

