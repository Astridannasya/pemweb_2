<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Unitkerja();
$data_unitkerja = $model->dataUnitkerja();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }


?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Unit Kerja</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Unit Kerja</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- /.row -->
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Unit Kerja</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                  <a href="index.php?url=unitkerja_form" class="btn btn-primary"> + Tambah</a>
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
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                  <tbody>
                     <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_unitkerja as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama']?></td>

                                            <td>
                                                <form action="unitkerja_controller.php" method="POST">
                                                <a href="index.php?url=unitkerja_form&idedit=<?= $row['id']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>

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