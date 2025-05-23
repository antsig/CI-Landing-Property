<h4>Edit Fasilitas</h4>
<hr>

<form action="<?= base_url('admin/fasilitas/edit/' . $fasilitas['id_fasilitas']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view('admin/fasilitas/form') ?>
</form>
