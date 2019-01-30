<div class="col-md-4">
	<div class="thumbnail">
		<img src="<?=base_url()?>asset/gambar/<?= $detail_brg->gambar;?>" style="width: 100%">
	</div>
</div>
<div class="col-md-8">
	<table class="table table-hover table-striped">
		<tr>
			<td><?= $detail_brg->nama_barang; ?></td>
			<td><?= $detail_brg->harga; ?></td><td></td>
		</tr>
		<tr>
			<td><?= $detail_brg->deskripsi; ?></td><td></td>
		</tr>
	</table>
		<form action="<?=base_url('index')?>" method="post">
	<input type="hidden" name="id_buku" value="<?= $detail_brg->id_barang?>">
	<input type="number" class="form-control" style="width:55px;display: inline-block;margin-right: 20px" value="1" name="qty">
	<input type="submit" class="btn btn-success" name="beli" value="Beli">
	</form>
</div>

