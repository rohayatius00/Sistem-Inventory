<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
$act=$ff->get("act");
$userLvl=$ff->get("userLvl");
$id_petugas=$ff->sess("userID");
switch ($act) {
	case 'add':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$add=$odb->insert("tb_inventaris","'','$nama_inv','$kondisi','$keterangan','$stok','$id_jenis','$id_ruang','$kode_inv','$id_petugas',null");
		break;
	
	case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_inventaris","nama_inv='$nama_inv',kondisi='$kondisi',keterangan='$keterangan',stok='$stok',id_jenis='$id_jenis',id_ruang='$id_ruang',kode_inv='$kode_inv',id_petugas='$id_petugas' where id_inv='$id_inv'");
		break;

	case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {
			$del=$odb->delete("tb_inventaris where id_inv='$id'");
		}
		break;

	default:
		break;
}
 ?>
  <script type="text/javascript">
 	$("#konten").load('inventarisV.php');
 </script>