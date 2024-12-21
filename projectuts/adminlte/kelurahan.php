<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Kelurahan();
$data_kelurahan = $model->dataKelurahan();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }


?>

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kelurahan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kelurahan </li>
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
                <h3 class="card-title">Data Kelurahan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                  <a href="index.php?url=kelurahan_form" class="btn btn-primary"> + Tambah</a>
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
                                          <th>Kecamatan</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                  <tbody>
                     <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_kelurahan as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['kec_id']?></td>

                                            <td>
                                                <form action="kelurahan_controller.php" method="POST">
                                                <a href="index.php?url=kelurahan_form&idedit=<?= $row['id']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>

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