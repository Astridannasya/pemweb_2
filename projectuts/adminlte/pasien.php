<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Pasien();
$data_pasien = $model->dataPasien();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>


<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pasien </li>
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
                <h3 class="card-title">Data Pasien</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                  <a href="index.php?url=pasien_form" class="btn btn-primary"> + Tambah</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Kode</th>
                                          <th>Nama</th>
                                          <th>Tempat Lahir</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Gender</th>
                                          <th>Email</th>
                                          <th>Alamat</th>
                                          <th>ID Kelurahan</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                  <tbody>
                     <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_pasien as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['tmp_lahir']?></td>
                                            <td><?= $row['tgl_lahir']?></td>
                                            <td><?= $row['gender']?></td>
                                            <td><?= $row['email']?></td>
                                            <td><?= $row['alamat']?></td>
                                            <td><?= $row['kelurahan_id']?></td>

                                            <td>
                                                <form action="pasien_controller.php" method="POST">
                                                <a href="index.php?url=pasien_form&idedit=<?= $row['id']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>

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