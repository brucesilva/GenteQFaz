<?php 

//start sessão
session_start();

//verifica sessão
if(!isset($_SESSION['adm'])): 
 
header('Location:index.php');

endif;
 
//echo "<h1> Bem vindo administrador </h1>";
 
 ?>
  

<!DOCTYPE html>
<html>
<head>

<title> Login Seara </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">

  	<link rel="stylesheet" type="text/css" href="styleIndex.css"> 

	<!-- Inserindo icone na página -->
 	<link rel="shortcut icon" type="image/x-png" href="img/seara.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}



body{
  /* Colocar esse background novamente, so tirei para aparecer as msg do pphp
  background: linear-gradient(-105deg, #90697b, #141646 50%, #2f2a60); 
  background-size: 100%; /*aqui é para deixar a imagem 100% da tela  
   */
  background: linear-gradient(-105deg, #90697b, #141646 50%, #2f2a60);
}


.sidebar {
  height: 100%; 
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1C1C1C;
  overflow-x: hidden;
  padding-top: 76px; /*aqui é o espacamento da div preta com os menus */
/* margin-top: 275px;  aqui é o espacamento da div com o topo */
   
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

 
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

h1{
  color: white;
  font-size: 50px;
}

</style>
</head>
<body>


	<h1 align="center" >Área restrita - Administrador</h1>

<div class="sidebar">
  <a href="./administrador.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="./administrador.php?p=1"><i class="fa fa-fw fa-wrench"></i> Cadastrar</a>
  <a href="./administrador.php"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="./administrador.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div> 

  <?php 
    $pagina = @$_GET['p'];

    if($pagina == 1){
      require_once("inserir.php");
    }

   ?>
      
</body>
</html> 
