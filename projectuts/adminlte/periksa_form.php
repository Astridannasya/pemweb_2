<?php
error_reporting(0);
$obj_periksa = new Periksa();
$data_periksa = $obj_periksa->dataPeriksa();
$idedit = $_REQUEST['idedit'];
$pk = !empty($idedit) ? $obj_periksa->getPeriksa($idedit) : array();
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Data periksa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form periksa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Input Data Periksa</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form method="POST" action="periksa_controller.php">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal"  value="<?= $pk['tanggal']?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Berat</label>
                  <input type="number" class="form-control" id="berat" name="berat" value="<?= $pk['berat']?>">
                </div>
                <div class="form-group">
                  <label>Tinggi</label>
                  <input type="number" class="form-control" id="tinggi" name="tinggi" value="<?= $pk['tinggi']?>">
                </div>
                <div class="form-group">
                  <label>Tensi</label>
                  <input type="number" class="form-control" id="tensi" name="tensi" value="<?= $pk['tensi']?>">
                </div>
                </div>
                <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea id="keterangan" name="keterangan" class="form-control" rows="4"><?= $pk['keterangan']?></textarea>
                </div>
                <div class="form-group">
                  <label>Pasien</label>
                  <select select class="form-control" id="pasien_id" name="pasien_id">
                 <?php
                    $obj_pasien = new Pasien(); 
                    $datapasien = $obj_pasien->dataPasien(); 

                    foreach ($datapasien as $pasien) {
                    $selected = ($pasien['id'] == $pk['pasien_id']) ? 'selected' : '';
                    echo '<option value="' . $pasien['id'] . '" ' . $selected . '>' . $pasien['nama'] . '</option>';
                        }
                     ?>
                </select>
                </div>
                <div class="form-group">
                <label>Paramedik</label>
                <select select class="form-control" id="paramedik_id" name="paramedik_id">
                 <?php
                    $obj_paramedik = new Paramedik(); // Membuat instance dari class paramedik
                    $dataparamedik = $obj_paramedik->dataParamedik(); // Mengambil data paramedik

                    foreach ($dataparamedik as $paramedik) {
                    $selected = ($paramedik['id'] == $pk['paramedik_id']) ? 'selected' : '';
                    echo '<option value="' . $paramedik['id'] . '" ' . $selected . '>' . $paramedik['nama'] . '</option>';
                        }
                     ?>
                </select>
                </div>
                </div>
                <div class="form-group">
                  <?php 
                  if(empty($idedit)){
                  ?>
                  <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                  <?php
                  } else {
                    ?>
                    <button name="proses" type="submit" value="ubah" class="btn btn-danger">Update</button>
                    <input type="hidden" name="idx" value="<?= $idedit ?>">
                  <?php } ?>
                </div>
                <!-- /.form-group -->
                </form>
              </div>
              <!-- /.col -->
       
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- jQuery -->
<script src=" plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src=" plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src=" plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});