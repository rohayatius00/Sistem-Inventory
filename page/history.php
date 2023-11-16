<?php 
session_start();
include_once '../lib/class-Db.php';
include_once '../lib/class-Ff.php';
$userLvl=$ff->get("userLvl");
$id_petugas=$ff->sess("userID");
?>

<div class="card-header">
	<b>Riwayat Peminjaman</b>
	<!-- <div class="row pull-right">
 		<div class="col-md-4">
 			<button onclick="popup('historyD.php')" class="btn btn-success pull-right">
 				<i class="fa fa-file-pdf-o"></i>
 			</button> 
 		</div>
 	</div> -->
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table tabel-data">
 			<thead class="thead-light font-weight-bold">
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