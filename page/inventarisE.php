<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
$id=$ff->get("id");
if (!empty($id)) {
	$sel=$odb->select("tb_inventaris where id_inv='$id'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
	}
}
 ?>
<div class="card-header">
	<b>Edit Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="inventarisV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="inventarisA.php?act=up">
		<input type="hidden" name="id_inv" value="<?=$row['id_inv']?>">
		<div class="form-group">
			<label>Inventaris</label>
			<input type="text" name="nama_inv" class="form-control" id="nama_inv" value="<?=$row['nama_inv']?>">
		</div><br>

		<div class="form-group">
			<label>Kondisi</label>
			<select class="form-control select2" name="kondisi">
				
				<option value="Baik" selected="">Baik</option>
				<option value="Rusak" selected="">Rusak</option>
			</select>
		</div><br>

		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="keterangan" class="form-control" id="keterangan"><?=$row['keterangan']?></textarea>
			
		</div><br>
		<div class="form-group">
			<label>Stok</label>
			<input type="text" name="stok" class="form-control" id="stok" value="<?=$row['stok']?>">
		</div><br>
		<div class="form-group">
			<label>Kode Inventaris</label>
 				<input value="<?=$row['kode_inv']?>" type="text" name="kode_inv" class="form-control">
		</div><br>
		<div class="form-group">
			<label>Jenis</label>
			<select class="form-control select2" name="id_jenis">
				<?php 
					$sel=$odb->select("tb_jenis");
					while ($row=$sel->fetch()) {
						echo "<option value='$row[id_jenis]' selected=''>$row[nama_jenis]</option>";
					}
				 ?>
			</select>
		</div><br>
		<div class="form-group">
			<label>Ruang</label>
			<select class="form-control select2" name="id_ruang">
				<?php 
					$sel=$odb->select("tb_ruang");
					while ($row=$sel->fetch()) {
						echo "<option value='$row[id_ruang]' selected=''>$row[nama_ruang]</option>";
					}
				 ?>
			</select>
		</div><br>
		
		<div class="form-group pull-right">
			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			<button type="reset" class="btn btn-danger" name="reset">Reset</button>
		</div>
	</form>
</div>