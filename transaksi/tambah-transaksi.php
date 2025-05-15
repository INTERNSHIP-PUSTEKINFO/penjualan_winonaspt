<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI
            </div>
            <div class="card-body">
              <form action="simpan-transaksi.php" method="POST">
                
              <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nama_customer" placeholder="Masukkan Nama Customer" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" placeholder="Masukkan Nama Produk" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Tanggal Transaksi</label>
                  <input type="datetime-local" name="tanggal_transaksi" value="<?php echo date('Y-m-d\TH:i', strtotime($row['tanggal_transaksi'])) ?>" class="form-control" required>
                </div>

                <div class="form-group">
  <label>Metode Pembayaran</label>
  <select name="metode_pembayaran" class="form-control" required>
    <option value="">Pilih Metode Pembayaran</option>
    <option value="Transfer Bank">Transfer Bank</option>
    <option value="Kartu Kredit">Kartu Kredit</option>
    <option value="Tunai">Tunai</option>
    <option value="E-wallet">E-wallet</option>
    <option value="Cash On Delivery">Cash On Delivery</option>
  </select>
</div>


                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" name="quantity" placeholder="Masukkan quantity" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label>Total</label>
                  <textarea class="form-control" name="total" placeholder="Masukkan total" rows="4" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-warning">SIMPAN</button>
                <button type="reset" class="btn btn-dark">RESET</button>

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
