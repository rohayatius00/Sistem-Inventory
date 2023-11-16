<div class="modal fade" role="dialog" arria-hidden="true" tabindex="-1" id="login-modal" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Please Login</h5>
			</div>
			<form method="post" action="javascript:void(0);" id="frm-modal" data-url="cek_login.php?act=login">
				<div class="modal-body">
					<div class="input-group mb-3">
						
							<span class="input-group-text" ><i class="fa fa-user"></i></span>
							<input type="text" name="username" placeholder="Username"  class="form-control">
					
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" ><i class="fa fa-key"></i></span>
						<input type="password" name="password" placeholder="Password"  class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>	
<script type="text/javascript">
	$(function(){
		$("#frm-modal").submit(function(){
			var data3=$(this).serialize();
			var almt=$(this).attr("data-url");
			$.ajax({
				type:"post",
				url:almt,
				data:data3,
				success:function(data){
					alert(data);
					if (data==="Login sukses, Selamat Datang") {
						$("#login-modal").modal('hide');
						location.reload(true);
					}else{
						alert("kombinasi username dan password salah");
					}
				}
			});
		});
	})
</script>