<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
$act=$ff->get("act");
switch ($act) {
	case 'add':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$add=$odb->insert("tb_petugas","'','$username','$password','$nama_petugas','$id_level'");
		break;

	case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_petugas","username='$username',password='$password',nama_petugas='$nama_petugas',id_level='$id_level' where id_petugas='$id_petugas'");
		break;
	case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {
			$del=$odb->delete("delete from tb_petugas where id_petugas='$id'");
		}
		break;
	
	default:
		break;
}

 ?>
  <script type="text/javascript">
 	$("#konten").load('petugasV.php');
 </script>