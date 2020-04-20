<?php

//conexão com o BDO
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetoseara";


$connect = mysqli_connect($servername,$username,$password,$db);

//Verificando se deu certo a conexão
if(mysqli_connect_error()):
	echo "Falha na conexão ".mysqli_connect_error();
endif;
  
?>