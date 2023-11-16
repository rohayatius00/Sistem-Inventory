<?php 
class Fungsi{
	function post($p,$a=""){
		return isset($_POST["$p"])?$_POST["$p"]:["$a"];
	}
	function get($p,$a=""){
		return isset($_GET["$p"])?$_GET["$p"]:["$a"];
	}
	function sess($p,$a=""){
		return isset($_SESSION["$p"])?$_SESSION["$p"]:["$a"];
	}
	function redirect($a){
		echo "<script>location.href=('$a')</script>";
	}
	function alert($a){
		echo "<script>('$a')</script>";
	}
}
$ff=new Fungsi();
 ?>