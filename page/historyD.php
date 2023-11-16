<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<title>Data Peminjaman</title>
</head>
<body>
 <table align="center">
 	<tr >
 		<td><b><h3 align="center">Data Peminjaman</h3><h5>Aplikasi Inventaris Sarana dan Prasarana di SMK</h5></b></td>
 	</tr>
 </table>
<br>
<div class="card-body">
	<div class="table-responsive">
		<table class="table tabel-data">
			<thead class="thead-light">
				<tr>
					<td>No</td>
					<td>Id Peminjaman</td>
					<td>Peminjaman</td>
					<td>Pengembalian</td>
					<td>Jumlah</td>
					<td>Status Peminjaman</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=0;
				$now=date("Y-m-d");
				$query=$odb->select("v_peminjaman where id_pegawai='$id_petugas'");
				while ($row=$query->fetch()) {
					$no++;
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$row['id_peminjaman']?></td>
						<td><?=$row['tanggal_pinjam']?></td>
						<td><?=$row['tanggal_kembali']?></td>
						<td><?=$row['jumlah']?></td>
						<td><?php 
						if ($row['status_peminjamanan']=='sedang dipinjam') {
							?>
							<div style="color: red;"><b><?=$row['status_peminjamanan']?></b></div>
						<?php
						}else {
							?>
							<div style="color: blue;"><?=$row['status_peminjamanan']?></div>
							<?php
						}
						?></td>
					</tr>
					<?php 
				} ?>
			</tbody>
		</table>
	</div>
</div>