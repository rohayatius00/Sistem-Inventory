<?php 
include '../lib/class-Db.php';
?>
<div class="card-header">Laporan</div>
<div class="card-body">
	<div class="row">
		<div class="col-md-6">
			<div class="card-header alert alert-info"><b>Pegawai</b></div>
			<div class="card-body"><center>
				
				<button type="button" class="btn btn-info" onclick="popup('lapPegawai.php')"><i class="fa fa-download">   Download</i></button></center>
				<p><i><br>Note : berfungsi untuk mengetahui daftar pegawai yang sering pinjam</i></p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card-header alert alert-info"><b>Barang</b></div>
			<div class="card-body"><center>
				
				<button type="button" class="btn btn-info" onclick="popup('lapBarang.php')"><i class="fa fa-download">   Download</i></button></center>
				<p><i><br>Note : berfungsi untuk mengetahui daftar barang yang sering dipinjam</i></p>
			</div>
		</div>

		<div class="col-md-12">
			<div class="card-header alert alert-info"><b>Stok</b></div>
			<div class="card-body"><center>
				
				<button type="button" class="btn btn-info" onclick="popup('lapStok.php')"><i class="fa fa-download">   Download</i></button></center>
				<p><i><br>Note : berfungsi untuk mengetahui data stok barang</i></p>
			</div>
		</div>
	</div>
</div>