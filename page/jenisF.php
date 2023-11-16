<?php 
session_start();
include_once '../lib/class-Db.php';
include_once '../lib/class-Ff.php';
include_once 'nav.php';
 ?>
<div class="card-header">
	<b>Tambah Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" data-url="jenisV.php">
 		<i class="fa fa-close"></i>
 	</a>
</div>
<div class="card-body">
	<form method="post" action="javascript:void(0);" id="frm-input" data-url="jenisA.php?act=add">
		<div class="form-gruop mb-3">
			<label>Nama jenis</label>
			<input type="text" name="nama_jenis" class="form-control" required="">
		</div><br>
		<div class="form-gruop mb-3">
			<label>Kode jenis</label>
			<input type="text" name="kode_jenis" class="form-control" required="">
		</div><br>
		<div class="form-gruop mb-3">
			<label>Keterangan</label>
			<textarea name="keterangan" class="form-control" required=""></textarea>
		</div><br>
		<div class="form-gruop pull-right">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>