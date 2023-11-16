<?php 
session_start();
include '../lib/class-Db.php';
include 'nav.php';
?>

<div class="card-header">
	<b>Data Peminjaman</b>
	<div class="row pull-right">
 		<div class="col-md-4">
 			<button onclick="popup('peminjamanD.php')" class="btn btn-success pull-right">
 				<i class="fa fa-file-pdf-o"></i>
 			</button> 
 		</div>
 		<div class="col-md-4"><a href="#" class="btn btn-primary btn-nav pull-right" data-url="transaksi.php">
 		<i class="fa fa-plus"></i>
 	</a> </div>
 	</div>
</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table tabel-data">
			<thead class="thead-light">
			<tr>
					<td>No</td>
					<td>Barang</td>
					<td>Kode Barang</td>
					<td>Tanggal Pinjman</td>
					<td>Tanggal Kembali</td>
					<td>Status</td>
					<td>Pegawai</td>
					<td>Opsi</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=0;
				$query=$odb->select("v_peminjaman order by tanggal_pinjam desc");
				while ($row=$query->fetch()) {
						if ($row['id_pegawai'] !=0) {
							$sel=$odb->select("tb_pegawai where id_pegawai='".$row['id_pegawai']."'");
							$k=$sel->fetch();
							$par=$k['nama_pegawai'];
						}else{
							$par="";
						}
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
						<td><?=$par?></td>
						<td>
							<?php 
							if ($row['status_peminjamanan']=='sedang dipinjam') {
							?>
							<!-- kembali -->
							<a href="#" class="btn-nav" data-url="peminjamanA.php?jumlah=<?=$row['jumlah']?>&id_peminjaman=<?=$row['id_peminjaman']?>&id_inv=<?=$row['id_inv']?>"><i class="fa fa-mail-reply-all"></i></a>
							<?php
						}else {
							?>
							<a href="#"><i class="fa fa-check"></i></a>
							<?php
						}
						?>
						</td>
					</tr>
					<?php 
				} ?>
			</tbody>
		</table>
	</div>
</div>