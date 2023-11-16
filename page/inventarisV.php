<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
 <div class="card-header">
 	<b>Data Inventaris</b>
 	<div class="row pull-right">
 		<div class="col-md-4">
 			<button onclick="popup('inventarisD.php')" class="btn btn-success pull-right">
 				<i class="fa fa-file-pdf-o"></i>
 			</button> 
 		</div>
 		<div class="col-md-4"><a href="#" class="btn btn-primary btn-nav pull-right" data-url="inventarisF.php">
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
 					<td>Inventaris</td>
 					<td>Kode Inventaris</td>
 					<td>Stok</td>
 					<td>Jenis</td>
 					<td>Ruang</td>
 					<td>Keterangan</td>
 					<td>Tanggal Register</td>
 					<td>Opsi</td>
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
 				 	<td><?=$row['keterangan']?></td>
 				 	<td><?=$row['tanggal_register']?></td>
 				 	<td>
 				 		<!-- edit --><a href="#" class="btn btn-primary btn-nav" data-url="inventarisE.php?id=<?=$row['id_inv']?>"><i class="fa fa-edit"></i></a>
 				 		<!-- hapus --> <a href="#" class="btn btn-danger btn-nav" data-url="inventarisA.php?act=del&id=<?=$row['id_inv']?>">
 				 			<i class="fa fa-trash"></i>
 				 		</a>
 				 	</td>
 				 </tr>
 				 <?php
 				 } ?>
 			</tbody>
 		</table>
 	</div>
 </div>