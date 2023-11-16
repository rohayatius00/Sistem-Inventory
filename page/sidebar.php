<?php 
include_once "../lib/class-Db.php";

$userLvl=$ff->sess("userLvl");
?>
<ul class="list-group list-group-flush">
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="dashboard">
		<i class="fa fa-dashboard"></i>&nbsp; Dashboard
	</a>

<?php if ($userLvl==1) { ?>
 	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="inventarisV">			
 		<i class="fa fa-list"></i>&nbsp; Inventaris
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="jenisV">
		<i class="fa fa-tag"></i>&nbsp; Jenis
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="ruangV">
		<i class="fa fa-bank"></i>&nbsp; Ruang
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="pegawaiV">
		<i class="fa fa-users"></i>&nbsp; Pegawai
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="petugasV">
		<i class="fa fa-user"></i>&nbsp; Petugas
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="peminjamanV">
		<i class="fa fa-history"></i>&nbsp; Peminjaman
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="transaksi">
		<i class="fa fa-shopping-basket"></i>&nbsp; Transaksi
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="laporanV">
		<i class="fa fa-pie-chart"></i>&nbsp; Laporan
	</a>

<?php }elseif ($userLvl==2) { ?>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="peminjamanV">
		<i class="fa fa-history"></i>&nbsp; Peminjaman
	</a>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="transaksi">
		<i class="fa fa-shopping-basket"></i>&nbsp; Transaksi
	</a>

<?php }elseif ($userLvl==3) { ?>
	<a href="#" class="list-group-item list-group-item-action btn-menu" data-url="history">
		<i class="fa fa-history"></i>&nbsp; History
	</a>

<?php } ?>
</ul>