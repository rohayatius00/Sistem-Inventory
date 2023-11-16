<?php 
session_start();
	include '../lib/class-Db.php';
	include '../lib/class-Ff.php';
 ?>
 <div class="card-header"><b>Transaksi</b></div>
 <div class="card-body">
 	<form method="post" action="javascript:void(0);" id="frm-input" data-url="cart.php?act=add">
 		<div class="form-row">
 			<div class="col-md-2">
 				<label>ID Pegawai</label>
 			</div>
 			<div class="form-group col-md-6">
 				<input type="text" name="id_pegawai" id="id_pegawai" class="form-control" required="">
 			</div>
 			<div class="form-group col-md-2">
 				<h3><span class="badge badge-secondary text-uppercase" id="pegawai"></span></h3>
 			</div>
 		</div>

 		<div class="form-row">
 			<label class="col-md-2">Kode Barang</label>
 			<input type="text" name="kode_inv" id="kode_inv" class="form-control col-md-10" required="">
 		</div><br>

 		<div class="form-row">
 			<label class="col-md-2">Nama Barang</label>
 			<input type="text" name="nama_inv" id="nama_inv" class="form-control col-md-10" readonly="">
 		</div><br>

 		<div class="form-row">
 			<label class="col-md-2">Jumlah</label>
 			<input type="tect" name="jumlah" id="jumlah" class="form-control col-md-10" required="">
 		</div><br>
 		<button class="btn btn-primary pull-right col-md-10">Tambah</button>
 	</form><br><br><br>
 	<table class="table table-bordered table-striped">
 		<thead>
 			<tr>
 				<th>Kode</th>
 				<th>Barang</th>
 				<th>Jumlah</th>
 			</tr>
 		</thead>
 		<tbody id="data-trans"></tbody>
 	</table>
 </div>
 <script type="text/javascript">
 	loadData();
 	function loadData(){
 		$("#data-trans").load("dataTrans.php");
 	}

 	$(function(){
 		//pencarian pegawai
 		$("#id_pegawai").keyup(function(){
 			var id=$(this).val();
 			$.ajax({
 				type:'post',
 				url:'findPegawai.php',
 				data:'id='+id,
 				success:function(data){
 					$("#pegawai").html(data);
 				}
 			});
 		});

 		//pencarian barang
 		$("#kode_inv").keyup(function(){
 			var id_inv=$(this).val();
 			$.ajax({
 				type:'post',
 				url:'findBarang.php',
 				data:'id_inv='+id_inv+'&id_pegawai='+id_pegawai,
 				success:function(data){
 					if (data !=null && data !='') {
 						var obj=JSON.parse(data);
 						$("#nama_inv").val(obj.nama_inv);
 						$("#jumlah").focus();
 					}else{
 						$("#nama_inv").val('');
 					}
 				}
 			});
 		});

 		//tambah ke cart
 		$("#frm-input").submit(function(){
 			var data=$(this).serialize();
 			var alamat=$(this).attr("data-url");
 			$.ajax({
 				type:'post',
 				url:'../lib/'+alamat,
 				data:data,
 				success:function(data){
 					loadData();
 					$("#id_pegawai").val('');
 					$("#pegawai").empty();
 					$("#kode_inv").val('');
 					$("#nama_inv").val('');
 					$("#jumlah").val('');
 					$("kode_inv").focus();
 				}
 			});
 		});
 	})
 </script>