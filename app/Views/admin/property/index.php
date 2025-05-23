<p>
    <a href="<?= base_url('admin/property/tambah') ?>" class="btn btn-success">
        <i class="fa fa-plus"></i> Tambah Baru
    </a>
</p>

<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th width="20%">Foto</th>
            <th width="35%">Judul</th>
            <th width="15%">Tipe</th>
            <th width="15%">Harga</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($property as $property): ?>
        <tr>
            <td><?= $no ?></td>
            <td>
                <img src="<?= base_url('assets/upload/image/' . $property['gambar']) ?>" style="max-height:50px;">
                <br>
                <small><?= $property['foto'] ?></small>
            </td>
            <td><?= $property['judul'] ?></td>
            <td><?= $property['tipe'] ?></td>
            <td><?= number_format($property['harga'], 0, ',', '.') ?></td>
            <td>
                <a href="<?= base_url('admin/property/edit/' . $property['id_property']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                <a href="<?= base_url('admin/property/delete/' . $property['id_property']) ?>" class="btn btn-dark btn-sm" onclick="return confirm('Are you sure you want to delete this property?')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php $no++; endforeach; ?>
    </tbody>
</table>
