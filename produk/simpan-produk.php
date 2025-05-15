<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$nama_produk = $_POST['nama_produk'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];
$deskripsi   = $_POST['deskripsi'];

// query insert data ke dalam database
$query = "INSERT INTO produk (nama_produk, harga, stok, deskripsi) VALUES ('$nama_produk', '$harga', '$stok', '$deskripsi')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

   //redirect ke halaman index.php 
    header("location: index.php");

} else {

    // pesan error gagal insert data
    echo "Data Gagal Disimpan! Error: ";
}

?>
