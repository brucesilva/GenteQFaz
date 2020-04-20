<?php 

namespace Classes;
 
class conexaoBDO{ 
 
	
	 private $conn;

	 public static function getConn(){
	 	$conn = new \PDO("mysql:host=localhost;dbname=projetoseara","root","");

	 	return $conn;

 

	 }


}



	
 ?>