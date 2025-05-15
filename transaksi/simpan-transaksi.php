<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$nama_customer       = $_POST['nama_customer'];
$nama_produk         = $_POST['nama_produk'];
$tanggal_transaksi   = $_POST['tanggal_transaksi'];
$metode_pembayaran   = $_POST['metode_pembayaran'];
$quantity            = $_POST['quantity'];
$total               = $_POST['total'];

// query insert data ke dalam database
$query = "INSERT INTO transaksi (nama_customer, nama_produk, tanggal_transaksi, metode_pembayaran, quantity, total) VALUES ('$nama_customer', '$nama_produk', '$tanggal_transaksi', '$metode_pembayaran', '$quantity', '$total')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

   //redirect ke halaman index.php 
    header("location: index.php");

} else {

    // pesan error gagal insert data
    echo "Data Gagal Disimpan! Error: ";
}

?>
