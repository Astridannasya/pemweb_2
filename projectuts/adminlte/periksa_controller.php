<?php
include_once 'koneksi.php';
include_once 'models/Periksa.php';

//step pertama yaitu menangkap request form

$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$paramedik_id = $_POST['paramedik_id'];


//menangkapan form diatas dijadikan array
$data = [
    $tanggal,
    $berat,
    $tinggi,
    $tensi,
    $keterangan,
    $pasien_id,
    $paramedik_id
];
$model = new Periksa();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST['idx']; $model->edit($data);break;
    case 'hapus':
        unset($data); $model->hapus($_POST['idx']); break;
    default:
    header('Location:index.php?url=periksaparamedik');
    break;
}
header('Location:index.php?url=periksa');

?>