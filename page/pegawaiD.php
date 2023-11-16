<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
 	<title>Data Pegawai</title>
 </head>
 <body>
 <table align="center">
 	<tr >
 		<td><b><h3 align="center">Data Pegawai</h3><h5>Aplikasi Inventaris Sarana dan Prasarana di SMK</h5></b></td>
 	</tr>
 </table>
 <div class="card-body">
 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<thead class="thead-light font-weight-bold bg-light">
 				<tr>
 					<td>No</td>
 					<td>Pegawai</td>
 					<td>NIP</td>
 					<td>Alamat</td>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 				$no=0;
 				$sel=$odb->select("tb_pegawai");
 				while ($row=$sel->fetch()) {
 					
 				 	$no++;
 				 ?>
 				 <tr>
 				 	<td><?=$no?></td>
 				 	<td><?=$row['nama_pegawai']?></td>
 				 	<td><?=$row['nip']?></td>
 				 	<td><?=$row['alamat']?></td>
 				 	
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