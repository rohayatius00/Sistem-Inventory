<?php 
session_start();
include '../lib/class-Db.php';
include '../lib/class-Ff.php';
$total=0;
if (isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $key => $val) {
		$sel=$odb->select("tb_inventaris where id_inv='$key'");
		$row=$sel->fetch();
		$total=$val;
		?>
		<tr>
			<td><?=$row['kode_inv']?></td>
			<td><?=$row['nama_inv']?></td>
			<td><?=$val?></td>
		</tr>
		<?php
	}
}else{
		echo "data kosong";
	}
 ?>

 <tr>
 	<td colspan="2">Tanggal Pengembalian</td>
 	<td><input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control"></td>
 </tr>
 <script type="text/javascript">
 	$(function(){
 		$("#tanggal_kembali").keypress(function(){
 			if (event.keyCode==13) {
 				var tanggal_kembali=$(this).val();
 				if (parseInt(tanggal_kembali)>0) {
 					$.ajax({
 						type:'post',
 						data:'tanggal_kembali='+tanggal_kembali,
 						url:'saveTrans.php',
 						success:function(data){
 							
 							if (data==='') {
 								alert('Transaksi Selesai');
 								$("#id_pegawai").val('');
 								$("#data-trans").load('dataTrans.php');
 							}else{
 								alert(data);
 							}
 						}
 					})
 				}else{
 					alert('belum ada transaksi');
 				}
 			}
 		});
 	})
 </script>