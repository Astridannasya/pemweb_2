<?php
error_reporting(0);
$obj_kelurahan = new Kelurahan();
$data_kelurahan = $obj_kelurahan->dataKelurahan();
$idedit = $_REQUEST['idedit'];
$kl = !empty($idedit) ? $obj_kelurahan->getKelurahan($idedit) : array();
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Data Kelurahan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Kelurahan</li>
            </ol>
          </div>
        </div>
     </div>
    </section>
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Input Data Kelurahan</h3>
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
              <div class="col-md-12">
                <form method="POST" action="kelurahan_controller.php">
                <div class="form-group">
                  <label>Nama Kelurahan</label>
                  <input type="text" class="form-control" id="nama" name="nama" class="form-control" value="<?= $kl['nama']?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Kecamatan ID</label>
                  <input type="text" class="form-control" id="kec_id" name="kec_id" class="form-control" value="<?= $kl['kec_id']?>">
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