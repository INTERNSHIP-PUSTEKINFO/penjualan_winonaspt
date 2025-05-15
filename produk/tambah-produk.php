<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PRODUK
            </div>
            <div class="card-body">
              <form action="simpan-produk.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" placeholder="Masukkan Nama Produk" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" placeholder="Masukkan harga" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="text" name="stok" placeholder="Masukkan stok" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi" rows="4" required></textarea>
                </div>

                <div class="form-group">
  <label for="kategori">Kategori</label>
  <select class="form-control" id="kategori">
    <option value="">Pilih Kategori</option>
    <option value="elektronik">Elektronik</option>
    <option value="pakaian">Pakaian</option>
    <option value="makanan">Makanan</option>
    <option value="olahraga">Olahraga</option>
    <option value="kecantikan">Kecantikan</option>
    <option value="lainnya">Lainnya</option>
  </select>
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
