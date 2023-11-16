<script type="text/javascript">
	$(function(){
		$(".btn-nav").click(function(){
			var alamat1=$(this).attr("data-url");
				
			$.ajax({
				type:"post",
				url:alamat1,
				success:function(data){
					var a=data.length;
					if (data.substring(a-4,a)==='.php') {
						$("#konten").empty();
						$("#konten").load(data)
					}else{
						$("#konten").empty();
						$("#konten").html(data);
					}

				},
				error:function(){
					$("#konten").html("404 page not found");
				}
			});
		});

		$("#frm-input").submit(function(){
			var dt=$(this).serialize();
			var alamat2=$(this).attr("data-url");
			$.ajax({
				type:"post",
				data:dt,
				url:alamat2,
				success:function(data){
					$("#konten").empty();
					$("#konten").html(data);
				},
				error:function(){
					$("#konten").html("404 page not found");
				}
			})
		});
		
		$(".select2").select2();
		$(".tabel-data").dataTable();
	})
</script>