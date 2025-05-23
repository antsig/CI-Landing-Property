<!-- Navigasi Tabs -->
<ul class="nav nav-tabs" id="konfigurasiTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="dasar-tab" data-toggle="tab" href="#dasar" role="tab" aria-controls="dasar"
            aria-selected="true">Dasar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo"
            aria-selected="false">Logo</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="icon-tab" data-toggle="tab" href="#icon" role="tab" aria-controls="icon"
            aria-selected="false">Icon</a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" id="kpr-tab" data-toggle="tab" href="#kpr" role="tab" aria-controls="kpr"
            aria-selected="false">KPR</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="struktur-tab" data-toggle="tab" href="#struktur" role="tab" aria-controls="struktur"
            aria-selected="false">Struktur</a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo"
            aria-selected="false">SEO</a>
    </li>
</ul>

<!-- Konten Tabs -->
<div class="tab-content pt-3" id="konfigurasiTabsContent">

    <!-- TAB DASAR -->
    <div class="tab-pane fade show active" id="dasar" role="tabpanel" aria-labelledby="dasar-tab">
        <?= form_open(base_url('admin/konfigurasi')); ?>
        <?= csrf_field(); ?>

        <h4>Informasi Dasar</h4>
        <hr>
        <div class="form-group row">
            <label class="col-3">Nama Website</label>
            <div class="col-9">
                <input type="text" name="namaweb" class="form-control" value="<?= $konfigurasi['namaweb'] ?>" required>
            </div>
        </div>

        <!-- <div class="form-group row">
		<label class="col-3">Singkatan Website</label>
		<div class="col-9">
			<input type="text" name="singkatan" class="form-control" value="<?= $konfigurasi['singkatan'] ?>">
		</div>
	</div> -->

        <div class="form-group row">
            <label class="col-3">Tagline Website</label>
            <div class="col-9">
                <input type="text" name="tagline" class="form-control" value="<?= $konfigurasi['tagline'] ?>">
            </div>
        </div>

        <!-- <div class="form-group row">
		<label class="col-3">Alamat Website</label>
		<div class="col-9">
			<input type="text" name="website" class="form-control" value="<?= $konfigurasi['website'] ?>">
		</div>
	</div> -->

        <h4>Informasi Profil Website/Aplikasi</h4>
        <hr>
        <div class="form-group row">
            <label class="col-3">Tentang Website</label>
            <div class="col-9">
                <textarea name="tentang" class="form-control konten" rows="5"><?= $konfigurasi['tentang'] ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">Deskripsi Ringkas</label>
            <div class="col-9">
                <textarea name="deskripsi" class="form-control"><?= $konfigurasi['deskripsi'] ?></textarea>
            </div>
        </div>

        <h4>Kontak dan Alamat</h4>
        <hr>

        <div class="form-group row">
            <label class="col-3">Official Email</label>
            <div class="col-9">
                <input type="text" name="email" class="form-control" value="<?= $konfigurasi['email'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">Secondary Email</label>
            <div class="col-9">
                <input type="text" name="email_cadangan" class="form-control"
                    value="<?= $konfigurasi['email_cadangan'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">Telepon</label>
            <div class="col-9">
                <input type="text" name="telepon" class="form-control" value="<?= $konfigurasi['telepon'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">HP</label>
            <div class="col-9">
                <input type="text" name="hp" class="form-control" value="<?= $konfigurasi['hp'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">Alamat</label>
            <div class="col-9">
                <textarea name="alamat" class="form-control summernote"><?= $konfigurasi['alamat'] ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">Google Map</label>
            <div class="col-9">
                <textarea name="google_map" class="form-control"><?= $konfigurasi['google_map'] ?></textarea>
            </div>
        </div>

        <h4>Jejaring Sosial</h4>
        <hr>

        <div class="form-group row">
            <label class="col-3">Facebook <i class="fab fa-facebook"></i></label>
            <div class="col-3">
                <input type="text" name="nama_facebook" class="form-control"
                    value="<?= $konfigurasi['nama_facebook'] ?>">
                <small class="text-secondary">Nama akun</small>
            </div>
            <div class="col-6">
                <input type="text" name="facebook" class="form-control" value="<?= $konfigurasi['facebook'] ?>">
                <small class="text-secondary">Alamat link akun</small>
            </div>
        </div>

        <!-- <div class="form-group row">
		<label class="col-3">Twitter <i class="fab fa-twitter"></i></label>
		<div class="col-3">
			<input type="text" name="nama_twitter" class="form-control" value="<?= $konfigurasi['nama_twitter'] ?>">
			<small class="text-secondary">Nama akun</small>
		</div>
		<div class="col-6">
			<input type="text" name="twitter" class="form-control" value="<?= $konfigurasi['twitter'] ?>">
			<small class="text-secondary">Alamat link akun</small>
		</div>
	</div> -->

        <div class="form-group row">
            <label class="col-3">Instagram <i class="fab fa-instagram"></i></label>
            <div class="col-3">
                <input type="text" name="nama_instagram" class="form-control"
                    value="<?= $konfigurasi['nama_instagram'] ?>">
                <small class="text-secondary">Nama akun</small>
            </div>
            <div class="col-6">
                <input type="text" name="instagram" class="form-control" value="<?= $konfigurasi['instagram'] ?>">
                <small class="text-secondary">Alamat link akun</small>
            </div>
        </div>
        <!-- 
	<div class="form-group row">
		<label class="col-3">Youtube <i class="fab fa-youtube"></i></label>
		<div class="col-3">
			<input type="text" name="nama_youtube" class="form-control" value="<?= $konfigurasi['nama_youtube'] ?>">
			<small class="text-secondary">Nama akun</small>
		</div>
		<div class="col-6">
			<input type="text" name="youtube" class="form-control" value="<?= $konfigurasi['youtube'] ?>">
			<small class="text-secondary">Alamat link akun</small>
		</div>
	</div> -->

        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>

    <!-- TAB LOGO -->
    <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="logo-tab">
        <?= form_open(base_url('admin/konfigurasi/logo')); ?>
        <?= csrf_field(); ?>
        <input type="hidden" name="id_konfigurasi" value="<?= $konfigurasi['id_konfigurasi'] ?>">
        <div class="form-group row">
            <label class="col-3">Upload Logo Baru</label>
            <div class="col-6">
                <input type="file" name="logo" value="<?= $konfigurasi['logo'] ?>" class="form-control">
                <small class="text-secondary">Format: JPG, PNG, GIF</small>
            </div>
            <div class="col-3">
                <img src="<?= logo() ?>" class="img img-thumbnail">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>

        <?= form_close(); ?>
    </div>

    <!-- TAB ICON -->
    <div class="tab-pane fade" id="icon" role="tabpanel" aria-labelledby="icon-tab">
        <?= form_open(base_url('admin/konfigurasi/icon')); ?>
        <?= csrf_field(); ?>
        <input type="hidden" name="id_konfigurasi" value="<?= $konfigurasi['id_konfigurasi'] ?>">
        <div class="form-group row">
            <label class="col-3">Upload Icon Baru</label>
            <div class="col-6">
                <input type="file" name="icon" value="<?= $konfigurasi['icon'] ?>" class="form-control">
                <small class="text-secondary">Format: JPG, PNG, GIF</small>
            </div>
            <div class="col-3">
                <img src="<?= icon() ?>" class="img img-thumbnail">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>

        <?= form_close(); ?>
    </div>

    <!-- TAB KPR -->
    <!-- <div class="tab-pane fade" id="kpr" role="tabpanel" aria-labelledby="kpr-tab">
        <?= form_open(base_url('admin/konfigurasi/kpr')); ?>
        <?= csrf_field(); ?>
        <input type="hidden" name="id_konfigurasi" value="<?= $konfigurasi['id_konfigurasi'] ?>">
        <div class="form-group row">
            <label class="col-3">Upload Simulasi KPR</label>
            <div class="col-6">
                <input type="file" name="kpr" value="<?= $konfigurasi['kpr'] ?>" class="form-control">
                <small class="text-secondary">Format: JPG, PNG, GIF</small>
            </div>
            <div class="col-3">
                <img src="<?= $konfigurasi['kpr'] ?>" class="img img-thumbnail">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>

        <?= form_close(); ?>
    </div> -->

    <!-- TAB Struktur -->
    <!-- <div class="tab-pane fade" id="struktur" role="tabpanel" aria-labelledby="struktur-tab">
        <?= form_open(base_url('admin/konfigurasi/struktur')); ?>
        <?= csrf_field(); ?>
        <input type="hidden" name="id_konfigurasi" value="<?= $konfigurasi['id_konfigurasi'] ?>">
        <div class="form-group row">
            <label class="col-3">Upload Struktur</label>
            <div class="col-6">
                <input type="file" name="struktur" value="<?= $konfigurasi['struktur'] ?>" class="form-control">
                <small class="text-secondary">Format: JPG, PNG, GIF</small>
            </div>
            <div class="col-3">
                <img src="<?= $konfigurasi['struktur'] ?>" class="img img-thumbnail">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>

        <?= form_close(); ?>
    </div> -->

    <!-- TAB SEO -->
    <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
        <?= form_open(base_url('admin/konfigurasi/seo')); ?>
        <?= csrf_field(); ?>
        <input type="hidden" name="id_konfigurasi" value="<?= $konfigurasi['id_konfigurasi'] ?>">

        <div class="form-group row mt-3">
            <label class="col-3">Keywords (untuk pencarian Google)</label>
            <div class="col-9">
                <textarea name="keywords" class="form-control"><?= $konfigurasi['keywords'] ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3">Metatext, Facebook Pixel, Google Analytic dsb</label>
            <div class="col-9">
                <textarea name="metatext" class="form-control"><?= $konfigurasi['metatext'] ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-9">
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>

</div>