<?php 
session_start();
include 'class-Db.php';
include 'class-Ff.php';
$aksi=$ff->get("act");
$post=$odb->sant(INPUT_POST);
switch ($aksi) {
	case 'add':
		extract($post);
		$sel=$odb->select("tb_inventaris where kode_inv='$kode_inv'");
		if ($sel->rowCount()>0) {
			$row=$sel->fetch();
			if (isset($_SESSION['cart'][$row['id_inv']])) {
				if ($jumlah==0) {
					unset($_SESSION['cart'][$row['id_inv']]);
				}else{
					$_SESSION['cart'][$row['id_inv']]+=$jumlah;
				}
			}else{
				$_SESSION['cart'][$row['id_inv']]=$jumlah;
			}
		}
		break;
	case 'batal':
		unset($_SESSION['cart']);
		unset($_SESSION['pegawai']);
		break;

	default:
		# code...
		break;
}
 ?>