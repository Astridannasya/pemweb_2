<?php

include 'koneksi.php';    

$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat_pelanggan = $_POST['alamat_pelanggan'];
$telepon_pelanggan = $_POST['telepon_pelanggan'];
$nama_produk = $_POST['nama_produk'];
$jenis_produk = $_POST['jenis_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];

$query = "INSERT INTO Penjualan (nama_pelanggan, alamat_pelanggan, telepon_pelanggan, nama_produk, jenis_produk, harga, jumlah, tanggal_penjualan)
            VALUES ('$nama_pelanggan', '$alamat_pelanggan', '$telepon_pelanggan', '$nama_produk', '$jenis_produk', '$harga', '$jumlah', '$tanggal_penjualan')";

if( $conn->query($query) === TRUE ) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
