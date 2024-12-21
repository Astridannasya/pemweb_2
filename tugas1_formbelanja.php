<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bg-primary{
            color : white;
        }
        .tampil{
            margin-left : 80px;
        }
    </style>
    <title> Form Belanja</title>
</head>

<body>
    <div class="container">
        <div class="row">
          <!-- Bagian Form -->
            <div class="col-md-8">
                <h2>Belanja Online</h2>
                <hr>
                <form method="POST">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-4">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Bagian Tabel -->
            <div class="col-md-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-primary">
                            <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV : Rp 4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas : Rp 3.100.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci : Rp 3.800.000</td>
                        </tr>
                        <tr class="bg-primary">
                            <th>Harga dapat berubah setiap saat</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

<?php
error_reporting(0);

$proses = $_POST['proses'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// Harga produk 
$harga_tv = 4200000;
$harga_kulkas = 3100000;
$harga_mesin_cuci = 3800000;
$total_harga = 0;

// if else (harga produk * jumlah yang dibeli)
if ($produk == 'tv') {
    $total_harga = $harga_tv * $jumlah;
} elseif ($produk == 'kulkas') {
    $total_harga = $harga_kulkas * $jumlah;
} elseif ($produk == 'Mesin Cuci') {
    $total_harga = $harga_mesin_cuci * $jumlah;
}
?>

<div class="tampil">
<hr>
Nama Customer : <?= $customer ?>
<br> Produk Pilihan : <?= $produk ?>
<br> Jumlah Beli : <?= $jumlah ?>
<br> Total Harga : Rp <?= number_format($total_harga) ?>
</div>