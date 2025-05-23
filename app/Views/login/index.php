<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="<?= strip_tags($description) ?>" name="description">
  <meta content="<?= $keywords ?>" name="keywords">
  <!-- Favicons -->
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="icon">
  <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-oBW+52vVZXzNAlGpElKYGiBoA+tp6Md/OAxvn8PgZaK4YjZWf3bbKQxhvzYJKprLbLmVANmAV7/6oC3Gvm4aOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- iCheck Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-bTL1RUVivhvQmkEiHgGokSZh8OfbM7drApsztNBAPgMiO7SkTLr3Ml6iNh0PAixtG+d5fEGg/MO3TKek44XVxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-VvX38G+04A0RT9AeH2Z8uYxVSMjPZ+fHFhBvlO8y1ek=" crossorigin="anonymous"></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  
<body class="hold-transition login-page" style="background-color:rgb(48, 124, 38);">
<div class="login-box" style="min-width: 35% !important; ">

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="border-radius: 10px;">

      <div class="login-logo">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="<?= base_url('assets/upload/image/' . $site['icon']) ?>" class="img img-fluid" style="max-height: 200px; width 400px;" alt="<?= $site['namaweb'] ?>">
          </div>
        </div>
      </div>
      <hr>
      <p class="login-box-msg">Masukkan username dan password</p>

      <?= '<span class="text-danger">' . \Config\Services::validation()->listErrors() . '</span>'; ?>
      <?= form_open(base_url('login')); ?>
      <?= csrf_field() ?>

        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <?= form_close(); ?>
      <hr>
      <p class="mb-1 text-center">
        <a href="<?= base_url() ?>" class="text-center">Home</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script>
<?php if ($session->getFlashdata('sukses')) { ?>
// Notifikasi
swal ( "Berhasil" ,  "<?= $session->getFlashdata('sukses'); ?>" ,  "success" )
<?php } ?>

<?php if (isset($_GET['logout'])) { ?>
// Notifikasi
swal ( "Berhasil" ,  "Anda berhasil logout." ,  "success" )
<?php } ?>

<?php if (isset($_GET['login'])) { ?>
// Notifikasi
swal ( "Oops..." ,  "Anda belum login." ,  "warning" )
<?php } ?>

<?php if ($session->getFlashdata('warning')) { ?>
// Notifikasi
swal ( "Mohon maaf" ,  "<?= $session->getFlashdata('warning'); ?>" ,  "warning" )
<?php } ?>

</script>


<!-- Bootstrap 4 Bundle (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc2eXv2U5l9j72/rbNb2N8Q4E8ZyWOK5R+5iD8CX0" crossorigin="anonymous"></script>

<!-- AdminLTE 3 App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js" integrity="sha384-+9d+ZEmMZlqqfUHpMKoSmXExFFQeZijWg+lHjQITPv94EQUuPRlfyK5FzHrxGBBG" crossorigin="anonymous"></script>


</body>
</html>
