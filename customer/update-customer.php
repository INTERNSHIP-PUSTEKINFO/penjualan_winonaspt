<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$id            = $_POST['id'];
$nama_customer = $_POST['nama_customer'];
$email         = $_POST['email'];
$alamat        = $_POST['alamat'];

// query update data ke dalam database berdasarkan ID
$query = "UPDATE customer SET 
            nama_customer = '$nama_customer', 
            email = '$email', 
            alamat = '$alamat' 
          WHERE id = '$id'";

// kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    // redirect ke halaman daftar-customer.php
    header("Location: index.php");
} else {
    // pesan error gagal update data
    echo "Data Gagal Diupdate! Error: " . $koneksi->error;
}

?>
