<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA TRANSAKSI
            </div>
            <div class="card-body">
              <a href="tambah-transaksi.php" class="btn btn-md btn-light" style="margin-bottom: 10px">+</a>
              <a href="../index.php" class="btn btn-warning mb-3">Dashboard</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                   <th scope="col">NO.</th>
                   <th scope="col">NAMA CUSTOMER</th>
                   <th scope="col">NAMA PRODUK</th>
                    <th scope="col">TANGGAL TRANSAKSI</th>
                    <th scope="col">METODE PEMBAYARAN</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../koneksi.php');
                      $no = 1;
                      $query = mysqli_query($koneksi, "SELECT * FROM transaksi");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_customer'] ?></td>
                      <td><?php echo $row['nama_produk'] ?></td>
                      <td><?php echo $row['tanggal_transaksi'] ?></td>
                      <td><?php echo $row['metode_pembayaran'] ?></td>
                      <td><?php echo $row['quantity'] ?></td>
                      <td><?php echo $row['total'] ?></td>
                      <td class="text-center">
                      <a href="edit-transaksi.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">EDIT</a>
                      <a href="hapus-transaksi.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">HAPUS</a>

                      </td>
                  </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>