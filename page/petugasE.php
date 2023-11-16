<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
$id=$ff->get("id");
if (!empty($id)) {
	$sel=$odb->select("tb_petugas where id_petugas='$id'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
	}
}
 ?>
<div class="card-header">
	<b>Edit Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="petugasV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="petugasA.php?act=up">
		<input type="hidden" name="id_petugas" value="<?=$row['id_petugas']?>">
		<div class="form-gruop">
			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?=$row['username']?>">
		</div><br>
		<div class="form-gruop">
			<label>Password</label>
			<input type="password" name="password" class="form-control" value="<?=$row['password']?>">
		</div><br>
		<div class="form-gruop">
			<label>Nama Petugas</label>
			<input type="text" name="nama_petugas" class="form-control" value="<?=$row['nama_petugas']?>">
		</div><br>
		<div class="form-gruop">
			<label>Level</label>
			<select class="form-control select2" name="id_level">
				<?php 
					$sel=$odb->select("tb_level");
					while ($row=$sel->fetch()) {
						echo "<option value='$row[id_level]' selected=''>$row[nama_level]</option>";
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