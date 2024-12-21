<?php
error_reporting(0);
$obj_pasien = new Pasien();
$data_pasien = $obj_pasien->dataPasien();
$idedit = $_REQUEST['idedit'];
$ps = !empty($idedit) ? $obj_pasien->getPasien($idedit) : array();
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Data pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form pasien</li>
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
            <h3 class="card-title">Form Input Data pasien</h3>
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
                <form method="POST" action="pasien_controller.php">
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" class="form-control" id="kode" name="kode"  value="<?= $ps['kode']?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $ps['nama']?>">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?= $ps['tmp_lahir']?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $ps['tgl_lahir']?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="gender" value="P" <?php if($ps['gender'] == 'P') echo 'checked'; ?>>
                        <label for="radioPrimary1">
                            Perempuan
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="gender" value="L" <?php if($ps['gender'] == 'L') echo 'checked'; ?>>
                        <label for="radioPrimary2">
                            Laki-laki
                        </label>
                      </div>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="email" name="email" class="form-control" value="<?= $ps['email']?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" class="form-control" value="<?= $ps['alamat']?>">
                </div>
                <div class="form-group">
                <label>Kelurahan</label>
                <select select class="form-control" id="kelurahan_id" name="kelurahan_id">
                 <?php
                    $obj_kelurahan = new Kelurahan(); // Membuat instance dari class Kelurahan
                    $dataKelurahan = $obj_kelurahan->dataKelurahan(); // Mengambil data kelurahan

                    foreach ($dataKelurahan as $kelurahan) {
                    $selected = ($kelurahan['id'] == $ps['kelurahan_id']) ? 'selected' : '';
                    echo '<option value="' . $kelurahan['id'] . '" ' . $selected . '>' . $kelurahan['nama'] . '</option>';
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