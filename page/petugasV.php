<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
 <div class="card-header">
 	<b>Data Petugas</b>
 	<div class="row pull-right">
 		<div class="col-md-4">
 			<button onclick="popup('petugasD.php')" class="btn btn-success pull-right">
 				<i class="fa fa-file-pdf-o"></i>
 			</button> 
 		</div>
 		<div class="col-md-4"><a href="#" class="btn btn-primary btn-nav pull-right" data-url="petugasF.php">
 		<i class="fa fa-plus"></i>
 	</a> </div>
 	</div>
 </div>
 <div class="card-body">
 	<div class="table-responsive">
 		<table class="table tabel-data">
 			<thead class="thead-light font-weight-bold">
 				<tr>
 					<td>No</td>
 					<td>Petugas</td>
 					<td>Kode Petugas</td>
 					<td>Keterangan</td>
 					<td>Opsi</td>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 				$no=0;
 				$sel=$odb->select("v_petugas");
 				while ($row=$sel->fetch()) {
 					
 				 	$no++;
 				 ?>
 				 <tr>
 				 	<td><?=$no?></td>
 				 	<td><?=$row['nama_petugas']?></td>
 				 	<td><?=$row['username']?></td>
 				 	<td><?=$row['nama_level']?></td>
 				 	<td>
 				 		<!-- edit --><a href="#" class="btn btn-nav btn-primary" data-url="petugasE.php?id=<?=$row['id_petugas']?>"><i class="fa fa-edit"></i></a>
 				 		<!-- hapus --> <a href="#" class="btn btn-nav btn-danger" data-url="petugasA.php?act=del&id=<?=$rowp['id_petugas']?>"><i class="fa fa-trash"></i></a>
 				 	</td>
 				 </tr>
 				 <?php
 				 } ?>
 			</tbody>
 		</table>
 	</div>
 </div>