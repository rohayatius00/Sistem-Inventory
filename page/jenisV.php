<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
 ?>
 <div class="card-header">
 	<b>Data Jenis</b>
 	<div class="row pull-right">
 		<div class="col-md-4">
 			<button onclick="popup('jenisD.php')" class="btn btn-success pull-right">
 				<i class="fa fa-file-pdf-o"></i>
 			</button> 
 		</div>
 		<div class="col-md-4"><a href="#" class="btn btn-primary btn-nav pull-right" data-url="jenisF.php">
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
 					<td>Jenis</td>
 					<td>Kode Jenis</td>
 					<td>Keterangan</td>
 					<td>Opsi</td>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
 				$no=0;
 				$sel=$odb->select("tb_jenis");
 				while ($row=$sel->fetch()) {
 						$no++;
 				 ?>
 				 <tr>
 				 	<td><?=$no?></td>
 				 	<td><?=$row['nama_jenis']?></td>
 				 	<td><?=$row['kode_jenis']?></td>
 				 	<td><?=$row['keterangan']?></td>
 				 	<td>
 				 		<!-- edit --><a href="#" class="btn btn-nav btn-primary" id="frm-input" data-url="jenisE.php?id=<?=$row['id_jenis']?>">
 				 			<i class="fa fa-edit"></i> 
 				 		</a> 
 				 		<!-- hapus --> <a href="#" class="btn btn-nav btn-danger" id="frm-input" data-url="jenisA.php?act=del&id=<?=$row['id_jenis']?>">
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