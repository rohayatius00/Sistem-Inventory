<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
<div class="card-header">
	<b>Tambah Data</b>
	<a href="#" class="btn btn-primary btn-nav pull-right" id="menu" data-url="ruangV.php"><i class="fa fa-close"></i></a>
</div>
<div class="card-body">
	<form method="post" id="frm-input" action="javascript:void(0);" data-url="ruangA.php?act=add">
		<div class="form-gruop mb-3">
			<label>Nama Ruang</label>
			<input type="text" name="nama_ruang" id="nama_ruang" class="form-control" required="">
		</div><br>
		<div class="form-gruop mb-3">
			<label>Kode Ruang</label>
			<input type="text" name="kode_ruang" id="kode_ruang" class="form-control" required="">
		</div><br>
		<div class="form-gruop mb-3">
			<label>Keterangan</label>
			<textarea name="keterangan" id="keterangan" class="form-control" required=""></textarea>
		</div><br>
		<div class="form-gruop">
			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			<button type="reset" class="btn btn-danger" name="reset">Reset</button>
		</div><br>
	</form>
</div>