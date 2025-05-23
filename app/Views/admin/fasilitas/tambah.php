<h4>Tambah Fasilitas</h4>
<hr>

<form action="<?= base_url('admin/fasilitas/tambah') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view('admin/fasilitas/form') ?>
</form>
