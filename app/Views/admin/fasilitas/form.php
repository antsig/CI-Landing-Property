<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="form-group row">
    <label class="col-md-2">Fasilitas</label>
    <div class="col-md-10">
        <input type="text" name="judul_fasilitas" class="form-control" placeholder="Judul fasilitas"
               value="<?= old('judul_fasilitas', $fasilitas['judul_fasilitas'] ?? '') ?>">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Upload Gambar</label>
    <div class="col-md-10">
        <input type="file" name="gambar" class="form-control">
        <?php if (!empty($fasilitas['gambar'])): ?>
            <img src="<?= base_url('assets/upload/image/thumbs/' . $fasilitas['gambar']) ?>"
                 alt="Gambar Fasilitas" style="height: 100px; margin-top: 10px;">
        <?php endif; ?>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">keterangan</label>
    <div class="col-md-10">
        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"
               value="<?= old('keterangan', $fasilitas['keterangan'] ?? '') ?>">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2"></label>
    <div class="col-md-10">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?= base_url('admin/fasilitas') ?>" class="btn btn-secondary">Kembali</a>
    </div>
</div>
