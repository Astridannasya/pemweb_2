<?php
// Array assosiatif menu
$ar_menu = ['Home' => 'home.php','Produk' => 'produk.php','Profile' => 'profil.php','About' => 'about.php', 'Login' => 'index.php'];
$ar_prodi = ['Prodi Sistem Informasi' => 'si.php','Prodi Teknik Informatika' => 'ti.php','Prodi Bisnis Digital' => 'bd.php'];
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Program Studi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <?php foreach ($ar_prodi as $prodi => $p) { ?>
            <a href="<?= $p ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              <?= $prodi ?>
              </p>
            </a>
            <?php } ?>
              </li>
            </ul>
            <li class="nav-item">
            <?php foreach ($ar_menu as $menu => $m) { ?>
            <a href="<?= $m ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              <?= $menu ?>
              </p>
            </a>
            <?php } ?>
              </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>