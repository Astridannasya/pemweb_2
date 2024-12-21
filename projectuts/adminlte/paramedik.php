<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Paramedik();
$data_paramedik = $model->dataParamedik();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }


?>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Paramedik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Paramedik </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- /.row -->
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Paramedik</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                  <a href="index.php?url=paramedik_form" class="btn btn-primary"> + Tambah</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>JK</th>
                                          <th>Tempat Lahir</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Kategori</th>
                                          <th>No Telp</th>
                                          <th>Alamat</th>
                                          <th>Unit Kerja</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                  <tbody>
                     <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_paramedik as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['gender']?></td>
                                            <td><?= $row['tmp_lahir']?></td>
                                            <td><?= $row['tgl_lahir']?></td>
                                            <td><?= $row['kategori']?></td>
                                            <td><?= $row['telpon']?></td>
                                            <td><?= $row['alamat']?></td>
                                            <td><?= $row['unit_kerja_id']?></td>

                                            <td>
                                                <form action="paramedik_controller.php" method="POST">
                                                <a href="index.php?url=paramedik_form&idedit=<?= $row['id']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                                                  <button type="submit" class="btn btn-danger" name="proses" value="hapus" onclick="return confirm('Anda Yakin Hapus Data?')"><i class="fas fa-trash"></i></button>
                                                    <input type="hidden" name="idx" value="<?= $row['id']?>">

                                                </form>
                                            </td>
                                        </tr>
                                      <?php
                                        $no++; 
                                        }
                                        ?>
                                        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

                <?php

        // include_once 'bottom.php';
                ?>