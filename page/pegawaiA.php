<?php 
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
$act=$ff->get("act");
switch ($act) {
	case 'add':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$id_level=3;
		$add=$odb->insert("tb_pegawai","'','$nama_pegawai','$nip','$alamat'");
		$ins=$odb->insert("tb_petugas(username,password, nama_petugas, id_level)","'$nama_pegawai','$nip','$nama_pegawai','$id_level'");
		break;

	case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_pegawai","nama_pegawai='$nama_pegawai',nip='$nip',alamat='$alamat' where id_pegawai='$id_pegawai'");
		break;

	case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {
			$del=$odb->delete("tb_pegawai where id_pegawai='$id'");
		}
		break;
	
	default:
		# code...
		break;
}

 ?>
  <script type="text/javascript">
 	$("#konten").load('pegawaiV.php');
 </script>