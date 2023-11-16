<?php 
class Db{
	var $db=null;
	public function __construct(){
		try{
			$this->db=new PDO("mysql:host=localhost;dbname=ukk_rohayati","root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOExceptoin $e){
			die("Connection Error : ".$e->getMessage());
		}
	}
	function query($q){
		$query=$this->db->prepare($q);
		$query->execute();
		return $query;
	}
	function select($t,$f="*"){
		$query=$this->db->prepare("select $f from $t");
		$query->execute();
		return $query;
	}
	function insert($t,$f){
		$query=$this->db->prepare("insert into $t values($f)");
		$query->execute();
	}
	function update($t,$f){
		$query=$this->db->prepare("update $t set $f");
		$query->execute();
	}
	function delete($t){
		$query=$this->db->prepare("delete from $t");
		$query->execute();
	}
	function last(){
		return $this->db->lastInsertId();
	}
	function nur($q){
		return $data=$q->rowCount();
	}
	function sant($type){
		$data=filter_input_array($type, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		return $data;
	}
}
$odb = new Db();
 ?>