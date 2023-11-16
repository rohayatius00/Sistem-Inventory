<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<title>Laporan</title>
</head>
<body>
<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';

 ?>
 <table align="center">
 	<tr >
 		<td><b><h3 align="center">Laporan Barang</h3><h5>Aplikasi Inventaris Sarana dan Prasarana di SMK</h5></b></td>
 	</tr>
 </table>
<br>
 <div class="card-body">
 	<div class="table-responsive">
 		<table class="table table-bodered">
 			<thead class="thead-light font-weight-bold bg-light">
 				<tr>
 					<td>No</td>
 					<td>Inventaris</td>
 					<td>Kode Inventaris</td>
 					<td>Stok</td>
 					<td>Dipinjam</td>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 				$no=0;
 				$sel=$odb->select("lap_barang");
 				while ($row=$sel->fetch()) {
 				 	$no++;
 				 ?>
 				 <tr>
 				 	<td><?=$no?></td>
 				 	<td><?=$row['nama_inv']?></td>
 				 	<td><?=$row['kode_inv']?></td>
 				 	<td><?=$row['stok']?></td>
 				 	<td><?=$row['total']?></td>
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