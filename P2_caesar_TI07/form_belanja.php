<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="row m-3">
        <div class="col-8">
            <h2>
                Belanja Online
            </h2>
            <hr>
            <form>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Customer</label>
                    <div class="col-8">
                        <input id="nama" name="nama_cs" placeholder="Masukkan Nama Customer" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="product" id="product_0" type="radio" class="custom-control-input" value="tv" required="required">
                            <label for="product_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="product" id="product_1" type="radio" class="custom-control-input" value="kulkas" required="required">
                            <label for="product_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="product" id="product_2" type="radio" class="custom-control-input" value="mesin cuci" required="required">
                            <label for="product_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah Pembelian" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
            </ul>
        </div>
    </div>
    <hr>

</body>

</html>