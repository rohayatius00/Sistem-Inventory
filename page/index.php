<?php 
	session_start();
	include_once '../lib/class-Db.php';
	include '../lib/class-Ff.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inventaris Sekolah</title>

 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/dataTables/css/dataTables.bootstrap4.min.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/select2/dist/css/select2.min.css">
 </head>
 <body>
 	<div class="navbar bg-dark" style="height: 70px;">
 		<h5>INVENTARIS SEKOLAH</h5>
 		<form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline my-2 my-sm-0 btn-menu" data-url="logout"><i class="fa fa-sign-out"></i></button>
        </form>
 	</div><br>
 	<div class="container col-md-12 col-sm-12">
 		<div class="row">
 			<div class="card col-sm-2 col-md-2" style="border: 0;">
 				<?php include 'sidebar.php'; ?>
 			</div>
 			<div class="card col-sm-10 col-md-10" style="border: 0" id="konten">
 				<?php include 'dashboard.php'; ?>
 			</div>
 		</div>
 	</div>
 </body>
 </html>
 <script src="../plugins/dist/jquery-3.3.1.min.js"></script>
 <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
 <script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="../plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../plugins/dataTables/js/dataTables.bootstrap4.min.js"></script>
 <script src="../plugins/select2/dist/js/select2.min.js"></script>
 <script src="../plugins/jquery.popupwindow.js"></script>

 <script type="text/javascript">
 	$(function(){
 		$(".btn-menu").click(function(){
 			var alamat=$(this).attr("data-url");
 			$.ajax({
 				type:"post",
 				url:alamat+'.php',
 				success:function(data){
 					$("#konten").empty();
 					$("#konten").html(data);
 				},
 				error:function(){
 					$("#koknten").html("404 page not found");
 				}
 			});
 		});
 	})
 </script>

 <script type="text/javascript">
 	function popup($page){
 		$.popupWindow($page, {
 			width:800,
 			height:800,
 			center:'parent'
 		});
 	}
 </script>
 <?php 
include 'modal.php';
if (empty($_SESSION['userID'])) {
	?>
	<script type="text/javascript">
		$(function(){
			$('#login-modal').modal('show');
		})
	</script>
<?php
}
  ?> 