<!-- Display any error messages if present -->
<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<!-- Start of the form -->
<form action="<?= current_url() ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group row">
        <label class="col-md-2">Judul</label>
        <div class="col-md-10">
            <input type="text" name="judul" class="form-control" placeholder="Judul Properti"
                   value="<?= old('judul', $property['judul'] ?? '') ?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2">Tipe</label>
        <div class="col-md-10">
            <input type="text" name="tipe" class="form-control" placeholder="Tipe Properti"
                   value="<?= old('tipe', $property['tipe'] ?? '') ?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2">Harga</label>
        <div class="col-md-10">
            <input type="number" name="harga" class="form-control" placeholder="Harga Properti"
                   value="<?= old('harga', $property['harga'] ?? '') ?>">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2">Deskripsi</label>
        <div class="col-md-10">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Properti"><?= old('deskripsi', $property['deskripsi'] ?? '') ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2">Upload Gambar</label>
        <div class="col-md-10">
            <input type="file" name="gambar" class="form-control">
            <?php if (!empty($property['gambar'])): ?>
                <img src="<?= base_url('assets/upload/image/' . $property['gambar']) ?>" 
                     alt="gambar Properti" style="height: 100px; margin-top: 10px;">
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2"></label>
        <div class="col-md-10">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <a href="<?= base_url('admin/property') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</form>
