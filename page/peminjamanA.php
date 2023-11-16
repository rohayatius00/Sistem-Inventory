<?php 
session_start();
	include_once '../lib/class-Db.php';
	include '../lib/class-Ff.php';

	$kembali=$ff->get("jumlah");
	$id_pem=$ff->get("id_peminjaman");
	$id_in=$ff->get("id_inv");

	$status="sudah kembali";
	$odb->query("call stokKembali($id_in,$kembali)");
	$kem=$odb->query("update tb_peminjaman set status_peminjamanan='$status' where id_peminjman='$id_pem'");
 ?>
 <script type="text/javascript">
 	$("#konten").load('peminjamanV.php');
 </script>