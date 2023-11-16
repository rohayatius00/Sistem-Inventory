<?php 
include '../lib/class-Db.php';
include '../lib/class-FF.php';
$post=$odb->sant(INPUT_POST);
extract($post);
if (isset($id_inv)) {
	$sel=$odb->select("tb_inventaris where kode_inv='$id_inv'");
	if ($sel->rowCount()>0) {
		$row=$sel->fetch();
		$arr = array('nama_inv' => $row['nama_inv'] );
		echo json_encode($arr);
	}
}
 ?>