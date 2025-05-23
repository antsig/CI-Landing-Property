<p>
	<a href="<?= base_url('admin/fasilitas/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="20%">Ikon</th>
			<th width="20%">Judul</th>
			<th width="15%">Keterangan</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($fasilitas as $fasilitas) { ?>
		<tr>
			<td><?= $no ?></td>
			<td>
				<img src="<?= base_url('assets/upload/image/' . $fasilitas['gambar']) ?>" style="max-height:50px;">
				<br>
				<small><?= $fasilitas['gambar'] ?></small>
			</td>
			<td><?= $fasilitas['judul_fasilitas'] ?></td>
			<td><?= $fasilitas['keterangan'] ?></td>
			<td>
				<a href="<?= base_url('admin/fasilitas/edit/' . $fasilitas['id_fasilitas']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/fasilitas/delete/' . $fasilitas['id_fasilitas']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>