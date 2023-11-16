<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
<div class="card-header">
	<b>Tambah Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="pegawaiV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="petugasA.php?act=add">
		<div class="form-gruop">
			<label>Username</label>
			<input type="text" name="username" class="form-control" required="">
		</div><br>
		<div class="form-gruop">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required="">
		</div><br>
		<div class="form-gruop">
			<label>Nama Petugas</label>
			<input type="text" name="nama_petugas" class="form-control" required="">
		</div><br>
		<div class="form-gruop">
			<label>Level</label>
			<select class="form-control select2" name="id_level">
				<option value="">-- pilih --</option>
				<?php 
					$sel=$odb->select("tb_level");
					while ($k=$sel->fetch()) {
						echo "<option value='$k[id_level]'>$k[nama_level]</option>";
					}
				 ?>
			</select>
		</div><br>
		<div class="form-gruop pull-right">
			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			<button type="reset" class="btn btn-danger" name="reset">Reset</button>
		</div>
	</form>
</div>