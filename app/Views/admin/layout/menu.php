<?php
use App\Models\Konfigurasi_model;

$session     = \Config\Services::session();
$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
?>
<style type="text/css" media="screen">
  .nav-item a:hover {
    color: yellow !important;
  }
  .nav-treeview > .nav-item > .nav-link {
  padding-left: 30px;
  }
</style>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/dasbor') ?>" class="brand-link">
      <img src="<?= base_url('assets/upload/image/' . $site['icon']) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Antasena Sakti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional)
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('admin/akun') ?>" class="d-block"><?= $session->get('nama') ?></a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dahboard -->
          <li class="nav-item">
            <a href="<?= base_url('admin/dasbor') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- Profil, Berita, Layanan -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Profil &amp; Layanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/berita') ?>" class="nav-link">
                  <p>Data Profil/Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori') ?>" class="nav-link">
                  <p>Kategori Profil/Layanan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Galeri -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Galeri 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/galeri') ?>" class="nav-link">
                  <p>Data Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori_galeri') ?>" class="nav-link">
                  <p>Kategori Galeri</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Download -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-download"></i>
              <p>Data File Download
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/download') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data File Download</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/download/tambah') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah File Download</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori_download') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Kategori File Download</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- Video -->
          <li class="nav-item">
            <a href="<?= base_url('admin/video') ?>" class="nav-link">
              <i class="nav-icon fab fa-youtube"></i>
              <p>Video Youtube</p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/video') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Video</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/video/tambah') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Video Youtube</p>
                </a>
              </li>
            </ul> -->
          </li>
          <!-- pengguna -->
          <!-- <li class="nav-item">
            <a href="<?= base_url('admin/client') ?>" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>Clients &amp; Portfolio</p>
            </a>
          </li> -->
          <!-- Staff
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Staff &amp; Team
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/staff') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Staff/Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/staff/tambah') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Staff/Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori_staff') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Kategori Staff/Team</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- pengguna 
          <li class="nav-item">
            <a href="<?= base_url('admin/user') ?>" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Pengguna Website</p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url('admin/fasilitas') ?>" class="nav-link">
              <i class="nav-icon fa fa-download"></i>
              <p>Fasilitas
              </p>
            </a>
          </li>

          <!-- Property -->
          <li class="nav-item">
            <a href="<?= base_url('admin/property') ?>" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>Property
              </p>
            </a>
          </li
          <!-- Konfigurasi -->
          <li class="nav-item">
            <a href="<?= base_url('admin/konfigurasi') ?>" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>Setting Website
              </p>
            </a>
          </li>
          <!-- logout -->
          <li class="nav-item">
            <a href="<?= base_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dasbor') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="min-height: 500px;">


<?php
$validation = \Config\Services::validation();
    $errors = $validation->getErrors();
    if (! empty($errors)) {
        echo '<span class="text-danger">' . $validation->listErrors() . '</span>';
    }
?>

<?php if (session('msg')) : ?>
     <div class="alert alert-info alert-dismissible">
         <?= session('msg') ?>
         <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
     </div>
 <?php endif ?>