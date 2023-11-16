<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
<div class="card-header">
	<b>Tambah Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="inventarisV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="inventarisA.php?act=add">
		<div class="form-gruop">
			<label>Inventaris</label>
			<input type="text" name="nama_inv" class="form-control">
		</div><br>
		<div class="form-gruop">
			<label>Kondisi</label>
			<select name="kondisi" class="form-control select2">
				<option value="">-- pilih --</option>
				<option value="Baik">Baik</option>
				<option value="Rusak">Rusak</option>
			</select>
		</div><br>
		<div class="form-gruop">
			<label>Keterangan</label>
			<textarea name="keterangan" class="form-control"></textarea>
		</div><br>
		<div class="form-gruop">
			<label>Stok</label>
			<input type="text" name="stok" class="form-control">
		</div><br>
		<div class="form-gruop">
			<label>Jenis</label>
			<select class="form-control select2" name="id_jenis">
				<option value="">-- pilih --</option>
				<?php 
					$sel=$odb->select("tb_jenis");
					while ($row=$sel->fetch()) {
						echo "<option value='$row[id_jenis]'>$row[nama_jenis]</option>";
					}
				 ?>
			</select>
		</div><br>
		<div class="form-gruop">
			<label>Ruang</label>
			<select class="form-control select2" name="id_ruang">
				<option value="">--pilih--</option>
				<?php 
					$sel=$odb->select("tb_ruang");
					while ($row=$sel->fetch()) {
						echo "<option value='$row[id_ruang]'>$row[nama_ruang]</option>";
					}
				 ?>
			</select>
		</div><br>
		<div class="form-gruop">
			<label>Kode Inventaris</label>
			<input type="text" name="kode_inv" class="form-control">
		</div><br>


		<div class="form-gruop pull-right">
			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			<button type="reset" class="btn btn-danger" name="reset">Reset</button>
		</div>
	</form>
</div>