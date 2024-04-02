<?php
    include 'Koneksi.php';

    $query = "SELECT * FROM penjualan";
    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Penjualan</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2> <center>Form Penjualan</center></h2>
    <form action="insert_toko.php" method="POST">
      <div class="form-group">
        <label for="namaPelanggan">Nama Pelanggan:</label>
        <input type="text" class="form-control" id="namaPelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
      </div>
      <div class="form-group">
        <label for="alamatPelanggan">Alamat Pelanggan:</label>
        <textarea class="form-control" id="alamatPelanggan" name="alamat_pelanggan" placeholder="Masukkan Alamat Pelanggan" required></textarea>
      </div>
      <div class="form-group">
        <label for="teleponPelanggan">Telepon Pelanggan:</label>
        <input type="number" class="form-control" id="teleponPelanggan"  name="telepon_pelanggan"placeholder="Masukkan Nomor Telepon" required>
      </div>
      <div class="form-group">
        <label for="namaProduk">Nama Produk:</label>
        <input type="text" class="form-control" id="namaProduk" name="nama_produk" placeholder="Masukkan Nama Produk" required>
      </div>
      <div class="form-group">
        <label for="deskripsiProduk">Jenis Produk:</label>
        <select class="form-control" id="jenisProduk" name="jenis_produk" required>
        <option value="">Pilih Jenis Produk</option>
        <option value="Kaos">Kaos</option>
        <option value="Kemeja">Kemeja</option>
        <option value="Dress">Dress</option>
        <option value="Jaket">Jaket</option>
        <option value="Celana">Celana</option>
        <option value="Rok">Rok</option>
        </select>
      </div>
      <div class="form-group">
        <label for="hargaProduk">Harga Produk:</label>
        <input type="number" class="form-control" id="hargaProduk"  name="harga" placeholder="Masukkan Harga Produk" required>
      </div>
      <div class="form-group">
        <label for="jumlahProduk">Jumlah Produk:</label>
        <input type="number" class="form-control" id="jumlahProduk" name="jumlah" placeholder="Masukkan Jumlah Produk" required>
      </div>
      <div class="form-group">
        <label for="tanggalPenjualan">Tanggal Penjualan:</label>
        <input type="date" class="form-control" id="tanggalPenjualan" name="tanggal_penjualan" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="container mt-5">
    <h2>Data Penjualan</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID Penjualan</th>
          <th>Nama Pelanggan</th>
          <th>Alamat Pelanggan</th>
          <th>Telepon Pelanggan</th>
          <th>Nama Produk</th>
          <th>Jenis Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Tanggal Penjualan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()) : ?>
        <tr>
          <td><?= $row['id_penjualan'] ?></td>
          <td><?= $row['nama_pelanggan'] ?></td>
          <td><?= $row['alamat_pelanggan'] ?></td>
          <td><?= $row['telepon_pelanggan'] ?></td>
          <td><?= $row['nama_produk'] ?></td>
          <td><?= $row['jenis_produk'] ?></td>
          <td><?= $row['harga'] ?></td>
          <td><?= $row['jumlah'] ?></td>
          <td><?= $row['tanggal_penjualan'] ?></td>
          <td>
            <a href="edit.php">Edit</a>
            <a href="delete.php">Delete</a>
          </td>
        </tr>
        <?php endwhile ?>
      </tbody>
    </table>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
