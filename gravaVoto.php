<?php
//pegando a conexão do BDO
require_once 'bd_connect.php';

//start sessão
session_start();

//header('Location:index.php');


$votado = $_POST['r']; //aqui estou pegando a pessoa que o usuário votou 
$cpf = $_SESSION['cpf_usuario'];//pegando a pessoa que está logada


//aqui vou fazer a lógica no SQL
//Acrescentar o voto na pessoa que foi votada
//setar que a pessoa já votou 
//colocar a pessoa que ela votou


//adicionando que ela já votou
$sql = "UPDATE usuarios SET javotou = 1 WHERE cpf = '$cpf' ";
$resultado = mysqli_query($connect,$sql);

//aqui adicionando quem ela votou
$sqlVotouEm = "UPDATE usuarios SET votouem = '$votado' WHERE cpf = '$cpf' ";
$resultado = mysqli_query($connect,$sqlVotouEm);

//adicionado o voto na pessoa votada
$sqlAddVoto = "UPDATE usuarios SET votos = votos + 1 WHERE usuario = '$votado' ";
$resultado = mysqli_query($connect,$sqlAddVoto);

  
//echo "A pessoa votada foi $votado e a pessoa que votou foi do CPF $cpf";

//aqui eu exibo a mensagem e mando a pessoa novamente para o login
echo "<script> alert('Obrigado pelo seu voto')
		window.location ='index.php';</script>";

 

 
//fechando a conexão
//mysqli_close();
session_unset();
session_destroy();
//header('Location:index.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<br><a href="index.php">sair</a>
</body>
</html>