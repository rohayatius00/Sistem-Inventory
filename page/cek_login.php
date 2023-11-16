<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-FF.php';
$aksi=$ff->get("act");
if ($aksi=="login") {
	$post=$odb->sant(INPUT_POST);
	extract($post);
	$sel=$odb->select("tb_petugas where username='$username' and password='$password'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
		$_SESSION['userID']=$row['id_petugas'];
		$_SESSION['userLvl']=$row['id_level'];
		echo "Login sukses, Selamat Datang";
	}else{
		echo "gagal";
	}
}
 ?>