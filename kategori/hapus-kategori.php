<?php

include('../koneksi.php');

// get id 
$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id = '$id'";

if($koneksi->query($query)) {
    // jika berhasil, kembali ke halaman daftar
    header("Location: index.php");
} else {
    // jika gagal, tampilkan pesan
    echo "DATA GAGAL DIHAPUS! Error: " . $koneksi->error;
}

?>
