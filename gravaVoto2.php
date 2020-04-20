<?php
//pegando a conexão do BDO
namespace View;
//require_once 'bd_connect.php'; 
require ("./vendor/autoload.php");
 
use Classes\conexaoBDO;
use Classes\usuarios;
use Classes\usuariosCrud;


$insereVotos = new usuariosCrud();
$user = new usuarios();
 
//start sessão
session_start(); 

	//header('Location:index.php'); 
	$votado = $_POST['r']; //aqui estou pegando a pessoa que o usuário votou 
	$cpf = $_SESSION['cpf_usuario'];//pegando a pessoa que está logada

	
	//Aqui estou passando o valor para colocar que a pessoa já votou 
	$user->setCPF($cpf);	   
	$insereVotos->Javotou($user);
	echo "Cpf -> ".$cpf."<br>";

	//Aqui estou passando o valor para colocar que a pessoa já votou 
	$user->setVotouem($votado);
	$user->setCPF($cpf);	   
	$insereVotos->Votouem($user);

	echo "Votado -> ".$votado."<br>";
	 
	//aqui estou colocando o voto na pessoa votada
	$user->setNome($votado);
	$insereVotos->PessoaVotada($user);
 
	//Esse implode ele pega todos os valores do array e coloca em uma só variavel, o primeiro campo é a separação
	$valores = implode(", ", $_POST['valor']); //aqui estou passando para variavel valores os valores que a pessoa escolheu
	$descricao = $_POST['opiniao'];

	//aqui estou colocando os valores da pessoa
	$user->setValores($valores);
	$user->setDescricao($descricao);
	$user->setNome($votado);
	$insereVotos->Valores($user);

	//aqui estou pegando todos os dados que  a pessoa escolheu
	//foreach ($valores as $e ) {
	//	echo $e."<br>";
	///	
	//}

	/* Esse metodo de inserir está ok */

 
	//aqui estou buscando os valores do banco
	//$sqlSelect = "SELECT * FROM teste";
	//$stmt= conexaoBDO::getConn()->prepare($sqlSelect);
	//$stmt->execute();

	//$dados = $stmt->rowCount();



	/*
	//aqui mostro na tela os comentarios e os valores
	if($dados >0){
		while($mostra = $stmt->FETCH(\PDO::FETCH_OBJ)){
			echo $mostra->valores."<br>";
			echo $mostra->descricao."<br>";
			echo "<hr>";
		}
	}
	*/
  



/*Aqui termina a lógica dos valores  **/	





	/*
	$insereValores = new conexaoBDO();
	$sql = "update usuarios set valores =?, descricao = ? where cpf = ?";

	//$sql = "INSERT INTO usuarios (valores,descricao) VALUES (?,?)";

	$stmt = conexaoBDO::getconn()->prepare($sql);
 
	$stmt->bindvalue(1, $valores);
	$stmt->bindvalue(2, $motivo);
	$stmt->bindvalue(3, $votado);
	$stmt->execute();
	*/

  
//aqui vou fazer a lógica no SQL
//Acrescentar o voto na pessoa que foi votada
//setar que a pessoa já votou 
//colocar a pessoa que ela votou 

/*
//adicionando que ela já votou
$sql = "UPDATE usuarios SET javotou = 1 WHERE cpf = '$cpf' ";
$resultado = mysqli_query($connect,$sql);

//aqui adicionando quem ela votou
$sqlVotouEm = "UPDATE usuarios SET votouem = '$votado' WHERE cpf = '$cpf' ";
$resultado = mysqli_query($connect,$sqlVotouEm);


//adicionado o voto na pessoa votada
$sqlAddVoto = "UPDATE usuarios SET votos = votos + 1 WHERE nome = '$votado' ";
$resultado = mysqli_query($connect,$sqlAddVoto);
  
//adicionando os valores na pessoa votada
$sqlAddVoto = "UPDATE usuarios SET valores = $valroes, descricao =$motivo WHERE nome = '$votado' ";
*/


 //header('Location:./view/valores.php') ;
//echo "A pessoa votada foi $votado e a pessoa que votou foi do CPF $cpf";

 
//*******Voltar essas duas linhas se não der certo **********//
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
	<title>Valores JBS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="./model/css/valores.css">

	<!-- Inserindo icone na página -->
 	<link rel="shortcut icon" type="image/x-png" href="img/seara.png">

</head>
<body>
 	
 	<a href="index.php"> voltar</a>

</body>
</html>