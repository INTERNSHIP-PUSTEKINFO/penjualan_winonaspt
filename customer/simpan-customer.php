<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$nama_customer = $_POST['nama_customer'];
$email         = $_POST['email'];
$no_telepon    = $_POST['no_telepon'];
$alamat        = $_POST['alamat'];

// query insert data ke dalam database
$query = "INSERT INTO customer (nama_customer, email, no_telepon, alamat) VALUES ('$nama_customer', '$email', '$no_telepon', '$alamat')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

   //redirect ke halaman index.php 
    header("location: index.php");

} else {

    // pesan error gagal insert data
    echo "Data Gagal Disimpan! Error: ";
}

?>
