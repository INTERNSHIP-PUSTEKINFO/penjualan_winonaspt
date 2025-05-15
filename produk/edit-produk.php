<?php 
  include('../koneksi.php');

  if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
  }

  $id = $_GET['id'];

  $query = "SELECT * FROM produk WHERE id = $id LIMIT 1";
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
    <title>Edit Produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PRODUK
            </div>
            <div class="card-body">
              <form action="update-produk.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>" class="form-control" required>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" value="<?php echo $row['harga'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <textarea class="form-control" name="stok" rows="4" required><?php echo $row['stok'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="4" required><?php echo $row['deskripsi'] ?></textarea>
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
