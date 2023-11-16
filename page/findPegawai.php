<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
$post=$odb->sant(INPUT_POST);
extract($post);
if (isset($id)) {
	$sel=$odb->select("tb_pegawai where id_pegawai='$id'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
		echo $row['nama_pegawai'];
		$_SESSION['pegawai']['id']=$id;
	}else{
		echo "pegawai tidak terdaftar";
	}
}
 ?>