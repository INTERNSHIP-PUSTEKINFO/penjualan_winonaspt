<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$id                    = $_POST['id'];
$nama_customer         = $_POST['nama_customer'];
$nama_produk           = $_POST['nama_produk'];
$tanggal_transaksi     = $_POST['tanggal_transaksi'];
$metode_pembayaran     = $_POST['metode_pembayaran'];
$quantity              = $_POST['quantity'];
$total                 = $_POST['total'];

// query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi SET 
            nama_customer     = '$nama_customer',
            nama_produk       = '$nama_produk',
            tanggal_transaksi = '$tanggal_transaksi', 
            metode_pembayaran = '$metode_pembayaran', 
            quantity          = '$quantity',
            total             = '$total' 
          WHERE id = '$id'";

// kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    // redirect ke halaman index.php
    header("Location: index.php");
} else {
    // pesan error gagal update data
    echo "Data Gagal Diupdate! Error: " . $koneksi->error;
}

?>
