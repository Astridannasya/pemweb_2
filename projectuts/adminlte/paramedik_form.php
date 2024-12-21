<?php
error_reporting(0);
$obj_paramedik = new Paramedik();
$data_paramedik = $obj_paramedik->dataParamedik();
$idedit = $_REQUEST['idedit'];
$pr = !empty($idedit) ? $obj_paramedik->getParamedik($idedit) : array();
?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Data Paramedik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Paramedik</li>
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
            <h3 class="card-title">Form Input Data paramedik</h3>
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
    <form method="POST" action="paramedik_controller.php">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pr['nama']?>">
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="form-group clearfix">
          <div class="icheck-primary d-inline">
            <input type="radio" id="radioPrimary1" name="gender" value="P" <?php if($pr['gender'] == 'P') echo 'checked'; ?>>
            <label for="radioPrimary1">Perempuan</label>
          </div>
          <div class="icheck-primary d-inline">
            <input type="radio" id="radioPrimary2" name="gender" value="L" <?php if($pr['gender'] == 'L') echo 'checked'; ?>>
            <label for="radioPrimary2">Laki-laki</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?= $pr['tmp_lahir']?>">
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $pr['tgl_lahir']?>">
      </div>
      <div class="form-group">
    <label>Kategori</label>
    <select class="form-control" id="kategori" name="kategori">
        <option value="Dokter Umum" <?php if(isset($pr['kategori']) && $pr['kategori'] == 'Dokter Umum') echo 'selected'; ?>>Dokter Umum</option>
        <option value="Perawat" <?php if(isset($pr['kategori']) && $pr['kategori'] == 'Perawat') echo 'selected'; ?>>Perawat</option>
        <option value="Bidan" <?php if(isset($pr['kategori']) && $pr['kategori'] == 'Bidan') echo 'selected'; ?>>Bidan</option>
        <option value="Dokter Spesialis" <?php if(isset($pr['kategori']) && $pr['kategori'] == 'Dokter Spesialis') echo 'selected'; ?>>Dokter Spesialis</option>
        <option value="Asisten Medis" <?php if(isset($pr['kategori']) && $pr['kategori'] == 'Asisten Medis') echo 'selected'; ?>>Asisten Medis</option>
    </select>
</div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Telpon</label>
        <input type="text" class="form-control" id="telpon" name="telpon" value="<?= $pr['telpon']?>">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <textarea id="alamat" name="alamat" class="form-control" rows="4"><?= $pr['alamat']?></textarea>
      </div>
      <div class="form-group">
        <label>Unit Kerja</label>
        <select class="form-control" id="unit_kerja_id" name="unit_kerja_id">
          <?php
          $obj_unitkerja = new Unitkerja();
          $dataunitkerja = $obj_unitkerja->dataUnitkerja();

          foreach ($dataunitkerja as $unitkerja) {
            $selected = ($unitkerja['id'] == $pr['unit_kerja_id']) ? 'selected' : '';
            echo '<option value="' . $unitkerja['id'] . '" ' . $selected . '>' . $unitkerja['nama'] . '</option>';
          }
          ?>
        </select>
      </div>
    </div>
</div>
<div class="form-group">
  <?php
  if(empty($idedit)) {
    ?>
    <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    <?php
  } else {
    ?>
    <button name="proses" type="submit" value="ubah" class="btn btn-danger">Update</button>
    <input type="hidden" name="idx" value="<?= $idedit ?>">
    <?php
  }
  ?>
</div>
</form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">