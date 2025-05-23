<h4>Edit Property</h4>
<hr>

<form action="<?= base_url('admin/property/edit/' . $property['id_property']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view('admin/property/form') ?>
</form>
