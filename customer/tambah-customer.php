<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Customer</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH CUSTOMER
            </div>
            <div class="card-body">
              <form action="simpan-customer.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nama_customer" placeholder="Masukkan Nama Customer" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" placeholder="Masukkan Email" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="text" name="no_telepon" placeholder="Masukkan No Telepon" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Customer" rows="4" required></textarea>
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
