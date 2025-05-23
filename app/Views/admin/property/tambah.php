<h4>Tambah Property</h4>
<hr>

<form action="<?= base_url('admin/property/tambah') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view('admin/property/form') ?>
</form>
