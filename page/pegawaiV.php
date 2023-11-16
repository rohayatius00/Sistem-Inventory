<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
 <div class="card-header">
 	<b>Data Pegawai</b>
 	<div class="row pull-right">
 		<div class="col-md-4">
 			<button onclick="popup('pegawaiD.php')" class="btn btn-success pull-right">
 				<i class="fa fa-file-pdf-o"></i>
 			</button> 
 		</div>
 		<div class="col-md-4"><a href="#" class="btn btn-primary btn-nav pull-right" data-url="pegawaiF.php">
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
 					<td>Pegawai</td>
 					<td>NIP</td>
 					<td>Alamat</td>
 					<td>Opsi</td>
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
 				 	<td>
 				 		<!-- edit --><a href="#" class="btn btn-nav btn-primary" data-url="pegawaiE.php?id=<?=$row['id_pegawai']?>"><i class="fa fa-edit"></i></a>
 				 		<!-- hapus --> <a href="#" class="btn btn-nav btn-danger" data-url="pegawaiA.php?act=del&id=<?=$row['id_pegawai']?>"><i class="fa fa-trash"></i></a>
 				 	</td>
 				 </tr>
 				 <?php
 				 } ?>
 			</tbody>
 		</table>
 	</div>
 </div>