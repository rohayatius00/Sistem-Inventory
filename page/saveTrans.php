<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
$post=$odb->sant(INPUT_POST);
extract($post);
if (isset($_SESSION['pegawai']['id'])) {
	$id_pegawai=$_SESSION['pegawai']['id'];
	$status_peminjaman="sedang dipinjam";
	$tanggal_pinjam=date("Y-m-d");

	$add_pinjam=$odb->insert("tb_peminjaman","'','$tanggal_pinjam','$tanggal_kembali','$status_peminjaman','$id_pegawai'");
	$id_peminjaman=$odb->last();

	foreach ($_SESSION['cart'] as $key => $val) {
		$sel=$odb->select("tb_inventaris where id_inv='$key'");
		$row=$sel->fetch();
		$add_detail=$odb->insert("detail_pinjam","null,'$key','$val','$id_peminjaman'");
		$odb->query("call stokPinjam($key,$val)");
	}
	unset($_SESSION['cart'][$key]);
	unset($_SESSION['cart']);
}
unset($_SESSION['pegawai']['id']);
 ?>