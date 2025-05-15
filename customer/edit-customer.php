<?php 
  include('../koneksi.php');

  if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
  }

  $id = $_GET['id'];

  $query = "SELECT * FROM customer WHERE id = $id LIMIT 1";
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
    <title>Edit Customer</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT CUSTOMER
            </div>
            <div class="card-body">
              <form action="update-customer.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Customer</label>
                  <input type="text" name="nama_customer" value="<?php echo $row['nama_customer'] ?>" class="form-control" required>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="4" required><?php echo $row['alamat'] ?></textarea>
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
