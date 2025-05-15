<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data customer
$query = "SELECT * FROM customer";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">🏠 Dashboard Penjualan</a>
  </div>
</nav>

    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="customer/index.php" class="btn btn-secondary btn-block">Customer</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="produk/index.php" class="btn btn-danger btn-block">Produk</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="transaksi/index.php" class="btn btn-dark btn-block">Transaksi</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="kategori/index.php" class="btn btn-info btn-block">Kategori</a>
        </div>
    </div>

    <hr>

</div>
</body>
</html>