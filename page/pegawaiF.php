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
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="pegawaiA.php?act=add">
		<div class="form-gruop">
			<label>Nama Pegawai</label>
			<input type="text" name="nama_pegawai" class="form-control" required="">
		</div><br>
		<div class="form-gruop">
			<label>NIP</label>
			<input type="text" name="nip" id="nip" class="form-control" required="">
		</div><br>
		<div class="form-gruop">
			<label>Alamat</label>
			<input type="text-area" name="alamat" id="alamat" class="form-control" required="">
		</div><br>
		<div class="form-gruop pull-right">
			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			<button type="reset" class="btn btn-danger" name="reset">Reset</button>
		</div>
	</form>
</div>