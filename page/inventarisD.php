<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<title>Data Inventaris</title>
</head>
<body>
<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';

 ?>
 <table align="center">
 	<tr >
 		<td><b><h3 align="center">Data Barang</h3><h5>Aplikasi Inventaris Sarana dan Prasarana di SMK</h5></b></td>
 	</tr>
 </table>
<br>
 <div class="card-body">
 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<thead class="thead-light font-weight-bold bg-light">
 				<tr>
 					<td>No</td>
 					<td>Inventaris</td>
 					<td>Kode Inventaris</td>
 					<td>Stok</td>
 					<td>Jenis</td>
 					<td>Ruang</td>
 					<td>Kondisi</td>
 					<td>Keterangan</td>
 					<td>Tanggal Register</td>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 				$no=0;
 				$sel=$odb->select("v_inventaris");
 				while ($row=$sel->fetch()) {
 				 	$no++;
 				 ?>
 				 <tr>
 				 	<td><?=$no?></td>
 				 	<td><?=$row['nama_inv']?></td>
 				 	<td><?=$row['kode_inv']?></td>
 				 	<td><?=$row['stok']?></td>
 				 	<td><?=$row['nama_jenis']?></td>
 				 	<td><?=$row['nama_ruang']?></td>
 				 	<td><?=$row['kondisi']?></td>
 				 	<td><?=$row['keterangan']?></td>
 				 	<td><?=$row['tanggal_register']?></td>
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