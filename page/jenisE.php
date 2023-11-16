<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
$id=$ff->get("id");
if (!empty($id)) {
	$sel=$odb->select("tb_jenis where id_jenis='$id'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
	}
}

 ?>
<div class="card-header">
	<b>Edit Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="jenisV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" action="javascript:void(0);" id="frm-input" data-url="jenisA.php?act=up">
		<input type="hidden" name="id_jenis" value="<?=$id?>">
		<div class="form-gruop">
			<label>Nama jenis</label>
			<input type="text" value="<?=$row['nama_jenis']?>" name="nama_jenis" id="nama_jenis" class="form-control" >
		</div><br>
		<div class="form-gruop">
			<label>Kode jenis</label>
			<input type="text" value="<?=$row['kode_jenis']?>" name="kode_jenis" id="kode_jenis" class="form-control" >
		</div><br>
		<div class="form-gruop">
			<label>Keterangan</label>
			<textarea name="keterangan" id="keterangan" class="form-control"><?=$row['keterangan']?></textarea>
			
		</div><br>
		<div class="form-gruop pull-right">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>