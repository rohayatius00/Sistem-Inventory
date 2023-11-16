<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
$id=$ff->get("id");
if (!empty($id)) {
	$sel=$odb->select("tb_pegawai where id_pegawai='$id'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
	}
}
 ?>
<div class="card-header">
	<b>Edit Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="pegawaiV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="pegawaiA.php?act=up">
		<input type="hidden" name="id_pegawai" value="<?=$row['id_pegawai']?>">
		<div class="form-gruop">
			<label>Nama Pegawai</label>
			<input type="text" name="nama_pegawai" class="form-control" value="<?=$row['nama_pegawai']?>">
		</div><br>
		<div class="form-gruop">
			<label>NIP</label>
			<input type="text" name="nip" id="nip" class="form-control" value="<?=$row['nip']?>">
		</div><br>
		<div class="form-gruop">
			<label>Alamat</label>
			<input type="textarea" name="alamat" id="alamat" class="form-control" value="<?=$row['alamat']?>">
		</div><br>
		<div class="form-gruop pull-right">
			<button type="submit" class="btn btn-primary" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
		</div>
	</form>
</div>