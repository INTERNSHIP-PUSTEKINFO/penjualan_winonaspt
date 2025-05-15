<?php

// include koneksi database
include('../koneksi.php');

// get data dari form
$id            = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];

// query update data ke dalam database berdasarkan ID
$query = "UPDATE kategori SET 
            nama_kategori = '$nama_kategori'
          WHERE id = '$id'";

// kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    // redirect ke halaman daftar-kategori.php
    header("Location: index.php");
} else {
    // pesan error gagal update data
    echo "Data Gagal Diupdate! Error: " . $koneksi->error;
}

?>
