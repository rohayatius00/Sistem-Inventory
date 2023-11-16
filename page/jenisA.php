<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-Ff.php';

$act=$ff->get("act");
switch ($act) {
	case 'add':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$add=$odb->insert("tb_jenis","'','$nama_jenis','$kode_jenis','$keterangan'");
		break;

	case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_jenis","nama_jenis='$nama_jenis',kode_jenis='$kode_jenis',keterangan='$keterangan' where id_jenis='$id_jenis'");
		break;

	case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {
			$del=$odb->delete("tb_jenis where id_jenis='$id'");
		}
		break;
	
	default:
		# code...
		break;
}
 ?>
 <script type="text/javascript">
 	$("#konten").load('jenisV.php');
 </script>