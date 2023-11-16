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
 		<td><b>
 			<h3 align="center">Data Peminjaman</h3>
 			<h5>Aplikasi Inventaris Sarana dan Prasarana di SMK</h5>
 		</b></td>
 	</tr>
 </table>
<br>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-light bg-light">
				<tr>
					<td>No</td>
					<td>Barang</td>
					<td>Kode Barang</td>
					<td>Tanggal Pinjman</td>
					<td>Tanggal Kembali</td>
					<td>Status</td>
					<td>ID Pegawai</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=0;
				$query=$odb->select("v_peminjaman");
				while ($row=$query->fetch()) {
					$no++;
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$row['nama_inv']?></td>
						<td><?=$row['kode_inv']?></td>
						<td><?=$row['tanggal_pinjam']?></td>
						<td><?=$row['tanggal_kembali']?></td>
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
						<td><?=$row['id_pegawai']?></td>
					</tr>
					<?php 
				} ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	window.print();
</script>