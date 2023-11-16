<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
include 'nav.php';
$act=$ff->get("act");
switch ($act) {
	case 'add':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$add=$odb->insert("tb_ruang","'','$nama_ruang','$kode_ruang','$keterangan'");
		break;

	case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$add=$odb->update("tb_ruang","nama_ruang='$nama_ruang',kode_ruang='$kode_ruang',keterangan='$keterangan' where id_ruang='$id_ruang'");
		break;

	case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {
			$del=$odb->delete("tb_ruang where id_ruang='$id'");
		}
		break;
	
	default:
		# code...
		break;
}
 ?>
  <script type="text/javascript">
 	$("#konten").load('ruangV.php');
 </script>