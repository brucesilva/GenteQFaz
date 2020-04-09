<?php
//trazendo a conexão do BDO para a página
require_once 'bd_connect.php';

//sessão
session_start();
 
//Pega a ação do botão
if(isset($_POST['btn-entrar'])):
	$erros = array(); //aqui é para pegar os erros
	$cpf = mysqli_escape_string($connect, $_POST['cpf']);

	//aqui vamos verificar se os campos estão vazios
	if(empty($cpf)):
		$erros[] = "<li> O campo CPF precisa ser preenchido </li>";
	  //  $erros[] = " O campo CPF precisa ser preenchido "; //tirei o li pq estou enviando a msg no alert

	else:
		//aqui vou fazer a conexão com o BDO e verificar se o CPF existe
		$sql = "SELECT cpf FROM usuarios Where cpf = '$cpf' ";
		$resultado = mysqli_query($connect, $sql);
 		 
		//verificar se tem o usuário ou não
		if(mysqli_num_rows($resultado) == 1):
 
			 //aqui é se existir o usuário 
			//aqui vou pegar todos os dados da consulta do SQL
			$dados = mysqli_fetch_array($resultado);
 
 			//Vou fazer uma consuta para trazer todos os dados para verificar se a pessoa já votou
 			//Vou fazer um consulta no BD para trazer todos os dados do usuários
			$sqlJaVotou = "SELECT * FROM usuarios WHERE cpf = '$cpf' ";
			$resultado = mysqli_query($connect,$sqlJaVotou);

				if(mysqli_num_rows($resultado) > 0):
					//aqui se eu conseguir encontrar coloco tudo na variavel dados
					$dados = mysqli_fetch_array($resultado);

					$teste = $dados['javotou']; //essa variavel pego que já votou
 
					if($teste == 1):
						echo "<script> alert ('Usuário já votou esse mês'); </script>"; 

					else:
						//Vou criar uma sessão para que eu possa recuperar na outra página
						$teste = 'ok';
						$_SESSION['logado'] = true; //aqui é para pegar em outra página
						//pegando o valor do ID e passando para a sessão
						$_SESSION['cpf_usuario'] = $dados['cpf']; //aqui estou pegando o cpf do usuário			 
						header('location:home.php');//aqio estou redirecionando para outra página
					endif;

					//echo "<h1> erro erro erro </h1>";
 				
 				//fechando a conexão
				//mysqli_close();
				else:
			 			 
				endif; 
			//se não der certo descomentar esse bloco
			//Vou criar uma sessão para que eu possa recuperar na outra página
			//$teste = 'ok';
			//$_SESSION['logado'] = true; //aqui é para pegar em outra página
			//pegando o valor do ID e passando para a sessão
			//$_SESSION['cpf_usuario'] = $dados['cpf']; //aqui estou pegando o cpf do usuário			 
			//header('location:home.php');//aqio estou redirecionando para outra página
  
		else:
			//aqúi é se não existir o usuário
			$erros[] = "<li> CPF não cadastrado na base de dados, procure o administrador do Sistema! </li>";
			//tirei o li pq está aparecendo no alert
			//$erros[] = " CPF não cadastrado na base de dados, procure o administrador do Sistema!";
			//echo "<li> CPF não cadastrado na base de dados, procure o administrador do Sistema! </li>";

		endif;

	endif;



endif;//fecha o if principal
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Seara</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="indexJBS.css">

	<!-- Inserindo icone na página -->
 	<link rel="shortcut icon" type="image/x-png" href="img/seara.png">

</head>
<body>

	<h1>Gente que Faz</h1>
	<div class="caixaLogin"> 

		<div class="img-user">
			<!-- <img src="img/avatar.png"> 
			
			<img src="img/genteQFazEstrela.png">-->
			<img src="img/seara.png">

		</div><!--Fecha img-user --> 
	 
		<h2>Logar no sistema</h2>
		<!-- Formulário customizado -->
				<form  <?php echo $_SERVER['PHP_SELF'];  ?> method="POST" > 
				
				<div class="campo">
					<input type="password" class="form-control"  name="cpf" required="">
					<label>CPF:</label>
				</div><!--Fecha div campo -->

				<button type="submit" class="btn btn-primary" name="btn-entrar">Entrar</button> 


 <!-- Exibi mensagem de erro, caso a pessoa não digite o CPF ou o CPF estiver incorreto -->
							<?php
								//aqui vou verificar se tem algum erro
								if(!empty($erros)):
									foreach ($erros as $erro):

										echo $erro; 
										//echo "<script> alert ('$erro'); </script>"; 

									endforeach;	 
								endif; 
							?>	



		</form>
 	</div><!--Fecha caixa login -->

 	<div></div> <!-- essa div é para o login ficar no centro -->

</body>
</html>