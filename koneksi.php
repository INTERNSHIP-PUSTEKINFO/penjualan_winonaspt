<?php

// Deklarasi variabel koneksi
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dbpenjualan";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// if($koneksi) {
//     echo "Koneksi Berhasil!";
    
// } else {
//     echo "Koneksi Gagal! : " . mysqli_connect_error();
// }

?>
