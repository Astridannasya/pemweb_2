<?php

//memanggil dan memproses file bagian atas
include_once 'koneksi.php';
include_once 'models/Kelurahan.php';
include_once 'models/Unitkerja.php';
include_once 'models/Pasien.php';
include_once 'models/Paramedik.php';
include_once 'models/Periksa.php';


include_once 'header.php';
//memanggil dan memproses file bagian menu
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    </section>
    <section class="content">
      <div class="container-fluid">
      <?php
// Algoritma menangkap url agar masuk ke dalam index
$url = isset($_GET['url']) ? $_GET['url'] : '';

if ($url === 'dashboard') {
    include_once 'dashboard.php';
} else if (!empty($url)) {
    $file = $url . '.php';
    if (file_exists($file)) {
        include_once $file;
    } else {
        // Lakukan tindakan lain jika file tidak ditemukan
    }
} else {
    include_once 'dashboard.php';
}
?>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
//memanggil file bagian bawah
include_once 'footer.php';

?>


