<?php 
	require ("./vendor/autoload.php");
	use Classes\usuarios;
	use Classes\usuariosCrud;
	use Classes\conexaoBDO;
	$conn = new conexaoBDO(); 
	$usuario = new usuarios();
	$crud = new usuariosCrud();
   
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="styleInserir.css">

	<!-- Inserindo icone na página -->
 	<link rel="shortcut icon" type="image/x-png" href="./model/img/seara2.png">

</head>
<style>

.php{ /*aqui estou mexendo nos erros que o php pode dá */
	/*border: 1px solid red;*/
	text-align: center;
	width: 550px;
	margin: auto;
}

</style>

<body>

<div class="php">
<?php 
	  
	try {
	$conn->getConn(); //trazendo a instancia do BDO

	if(isset($_POST['btn-entrar'])):

		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];

		$usuario->setId($id);
		$usuario->setNome($nome);
		$usuario->setCPF($cpf);

		$retorno = $crud->inserir($usuario);

		//$retorno = $crudUsuario->inserirUsuario($usuario); 

		if($retorno == 1){
			echo "<script> alert ('Dados cadastrados com suscesso') </script>";
		}else if($retorno == 2){
			echo "<script> alert ('Nenhum dado foi cadastrado') </script>";
		}else{
			echo "<script> alert ('ID ou CPF já existe no BD') </script>";
		}

endif;


	} catch (PDOException $e) {
		echo $e->getMessage();
		$cod = $e->getCode();
		$linha = $e->getLine();
		 

		 if($cod == 2002){
		 	echo "<h3> Favor verificar o nome do host, na linha ".$cod." </h3>"; 
		 }


		 if($cod == 1049){
		 	echo "<h3> Favor verificar o nome do banco, na linha ".$linha." </h3>"; 
		 }

		  if($cod == 1045){
		 	echo "<h3> Favor verificar a senha do banco, na linha ".$linha." </h3>"; 
		 }
		
	}


 ?>

</div><!--fecha div php -->

<div class=form> 
	<div class="container"> 
 
		<div class="img">
			<img src="seara2.png">
		</div>
  	
  		<h2>Cadastrar Usuário</h2>
  
	  <form  <?php echo $_SERVER['PHP_SELF'];  ?> method="POST">  

	  <div class="pegaTexto">
	    <label class="id"> Id.: </label>
	    <input type="text" name="id" class="idText" required="true"><br>

	    <label class="nome">Nome.:</label>
	    <input type="text" name="nome" class="nomeText" required="true"><br>

	    <label class="cpf">CPF.:</label>
	    <input type="text" name="cpf" class="cpfText" required="true"> <br>
	  </div><!-- Fecha pega Texto -->

	    <input type="submit" value="Cadastrar usuários" name="btn-entrar">
	  </form>
  

	</div>
</div>

</body>
</html>
