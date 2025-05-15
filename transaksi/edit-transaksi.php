<?php 
  include('../koneksi.php');

  if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
  }

  $id = $_GET['id'];

  $query = "SELECT * FROM transaksi WHERE id = $id LIMIT 1";
  $result = mysqli_query($koneksi, $query);

  if (!$result || mysqli_num_rows($result) == 0) {
    echo "Data tidak ditemukan!";
    exit;
  }

  $row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="update-transaksi.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nama_customer" value="<?php echo $row['nama_customer'] ?>" class="form-control" required>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Tanggal Transaksi</label>
                  <input type="datetime-local" name="tanggal_transaksi" value="<?php echo date('Y-m-d\TH:i', strtotime($row['tanggal_transaksi'])) ?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <select name="metode_pembayaran" class="form-control" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="Transfer Bank" <?php if($row['metode_pembayaran'] == 'Transfer Bank') echo 'selected'; ?>>Transfer Bank</option>
                    <option value="Kartu Kredit" <?php if($row['metode_pembayaran'] == 'Kartu Kredit') echo 'selected'; ?>>Kartu Kredit</option>
                    <option value="Tunai" <?php if($row['metode_pembayaran'] == 'Tunai') echo 'selected'; ?>>Tunai</option>
                    <option value="E-wallet" <?php if($row['metode_pembayaran'] == 'E-wallet') echo 'selected'; ?>>E-wallet</option>
                    <option value="Cash On Delivery" <?php if($row['metode_pembayaran'] == 'Cash On Delivery') echo 'selected'; ?>>Cash On Delivery</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Quantity</label>
                  <input type="number" name="quantity" value="<?php echo $row['quantity'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Total</label>
                  <input type="number" name="total" value="<?php echo $row['total'] ?>" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
