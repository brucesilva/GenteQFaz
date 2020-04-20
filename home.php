<?php 
//pegando a conexão do BDO
require_once 'bd_connect.php';

//start sessão
session_start();
   
//verifica sessão
if(!isset($_SESSION['logado'])): 
 
header('Location:index.php');

endif;


$cpf = $_SESSION['cpf_usuario'];

//Vou fazer um consulta no BD para trazer todos os dados do usuários
$sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' ";
$resultado = mysqli_query($connect,$sql);

	if(mysqli_num_rows($resultado) == 1):
		//aqui se eu conseguir encontrar coloco tudo na variavel dados
		$dados = mysqli_fetch_array($resultado);

		$teste = $dados['javotou'];

		//fechando a conexão
		//mysqli_close();

	else:

	endif;  
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Votação Gente que Faz</title>
 	
 	<!-- Inserindo icone na página -->
 	<link rel="shortcut icon" type="image/x-png" href="img/seara.png">


	<script>
		 
		//funcção para agradecer o usuário pelo voto
	 	//function msgDeOK(){
			//pegando o evento do botão
		 	//var botao = document.getElementById("btn_votar");//aqui estou pegando o botão	 
			// alert("Obrigado pelo seu voto");

		// }


		function desabilitaRadio(){
			var tipo = document.getElementsByName("r"); //aqui estou pegando todos os rádio button
			var botao = document.getElementById("btn_votar");//aqui estou pegando o botão	
			var id = <?php echo $dados['id'] ?>; //aqui estou pegando uma varaivel do php no meu caso eu quero o cpf ou o id


			//Leandra
			if(id == 21){
				botao.disabled = false;
			}

			//Lógica
			//tenho que desabilitar o botão do usário que esteja aqui para votar
			//não deixando ele votar nele mesmo
			//vou pegar o id e desabilitar o mesmo

			//aqui na hora que ele escolher ele mesmo, eu desabilito o radio e o botão
			if(id == 1){//aldines
				if(tipo[0].checked){
				   tipo[0].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 2){//Alessandro
				if(tipo[1].checked){
				   tipo[1].disabled = true;
				   botao.disabled = true;
				   //alert('estou dentro');
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 3){//Ana
				if(tipo[2].checked){
				   tipo[2].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 4){//Ademar
				if(tipo[3].checked){
				   tipo[3].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 5){//Celma
				if(tipo[5].checked){
				   tipo[5].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 6){//Caio
				if(tipo[6].checked){
				   tipo[6].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 7){//debora
				if(tipo[7].checked){
				   tipo[7].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 8){//Joao
				if(tipo[8].checked){
				   tipo[8].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 9){//fabricio
				if(tipo[9].checked){
				   tipo[9].disabled = true;
				   botao.disabled = true; 
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 10){//Juliano
				if(tipo[10].checked){
				   tipo[10].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 11){//jhonatan
				if(tipo[11].checked){
				   tipo[11].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 12){// Kleber
				if(tipo[12].checked){
				   tipo[12].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 13){// Leandra
				if(tipo[13].checked){
				   tipo[13].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 14){// Leandro
				if(tipo[14].checked){
				   tipo[14].disabled = true;
				   botao.disabled = true;
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 15){// Luis
				if(tipo[15].checked){
				   tipo[15].disabled = true;
				   botao.disabled = true;
				   //alert("Não é permitido votar em você mesmo, escolha outro funcionário");
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 16){// Marcelo
				if(tipo[16].checked){
				   tipo[16].disabled = true;
				   botao.disabled = true;
				   //alert("Não é permitido votar em você mesmo, escolha outro funcionário");
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 17){// Dalva
				if(tipo[17].checked){
				   tipo[17].disabled = true;
				   botao.disabled = true;
				   //alert("Não é permitido votar em você mesmo, escolha outro funcionário");
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 18){// Mariane
				if(tipo[18].checked){
				   tipo[18].disabled = true;
				   botao.disabled = true;
				   //alert("Não é permitido votar em você mesmo, escolha outro funcionário");
				}else{
					botao.disabled = false;
				} 
			} 

			if(id == 19){// Mariane
				if(tipo[19].checked){
				   tipo[19].disabled = true;
				   botao.disabled = true;
				   //alert("Não é permitido votar em você mesmo, escolha outro funcionário");
				}else{
					botao.disabled = false;
				} 
			}  

			if(id == 20){// Mariane
				if(tipo[4].checked){
				   tipo[4].disabled = true;
				   botao.disabled = true;
				   //alert("Não é permitido votar em você mesmo, escolha outro funcionário");
				}else{
					botao.disabled = false;
				} 
			}  

			//aqui vou agradecer o usuário pelo voto
 
		} 
	</script> 


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="radioEButton.css">
	<!--  <link rel="stylesheet" type="text/css" href="customHome.css"> -->
	<link rel="stylesheet" type="text/css" href="csshome.css">  

	<link rel="stylesheet" type="text/css" href="valores2.css">

</head>
<body>

 <main>  


 		<div class="logo">
		<img src="seara.png">  
		</div>

		
	<div class="principal">   

	<!-- Logo do funcionário do mês 
		<div class="logoGenteqFaz">
			<img src="funMesPequeno.jpg">
		</div>	-->



<div class="pai"> <!--Essa div pego a parte central do site --> 

	<div class="h1"> 
		<h1 >Seja bem vindo(a) <?php echo $dados['nome'] ?>, vote no funcionário do mês do seu setor </h1>
	</div>

<!--Aqui vou estilizar os radios button -->
<div class="radio-group"> 
	
	<form action="gravaVoto2.php"  method="POST"> 
		 
		<div class="envolveFilhas"> <!--Essa div fica centralizada no meio da Div Pai -->


		<div class="f1">

		<label class="radio"> 
			<input type="radio" value="Aldines" name="r" onclick="desabilitaRadio();"> <div class="usuarios">Aldines dos Santos Lima</div> 
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Alessandro" name="r" onclick="desabilitaRadio();"> <div class="usuarios"> Alessandro Alvarenga </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Ana" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Ana Carolina Carraro </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Ademar" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Antonio Ademar Rodrigues </div>
			<span></span> 
		</label><br>
 

		<label class="radio"> 
			<input type="radio" value="Antonio Tavares" name="r" onclick="desabilitaRadio();"><div class="usuarios">  Antonio Carlos De Azevedo Tavares </div>
			<span></span> 
		 </label><br>

		<label class="radio"> 
			<input type="radio" value="Celma" name="r" onclick="desabilitaRadio();"> <div class="usuarios">Celma Aparecida Rodrigues </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Caio" name="r" onclick="desabilitaRadio();"> <div class="usuarios"> Caio Matheus da Costa </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Debora" name="r" onclick="desabilitaRadio();"> <div class="usuarios">Debora Vitória Rodrigues  Dorta</div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Joao" name="r" onclick="desabilitaRadio();"> <div class="usuarios">João dos Reis Silva </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Fabrício" name="r" onclick="desabilitaRadio();"> <div class="usuarios">José Fabrício Barros da Silva </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Juliano" name="r" onclick="desabilitaRadio();"><div class="usuarios">Juliano Santana dos Santos </div>
			<span></span> 
		</label><br>

 
	</div><!--Fecha Div 1, aqui vai pegar a primeira metade dos nomes -->
	 
	<div class="f2"><!--aqui  pega a segunda  metade dos nomes -->

		<label class="radio"> 
			<input type="radio" value="Jhonatan" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Jhonatan Elias Monteiro Lima </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Kleber" name="r" onclick="desabilitaRadio();"> <div class="usuarios">Kleber Jose da Silva</div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Leandra" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Leandra Darri </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Leandro" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Leandro Gonçalves Costa </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Luis" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Luis Fernando dos Santos</div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Marcelo" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Marcelo Antonio Vedi</div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Dalva" name="r" onclick="desabilitaRadio();"> <div class="usuarios">Maria Dalva dos Santos </div>
			<span></span> 
		</label><br>

		<label class="radio"> 
			<input type="radio" value="Mariane" name="r" onclick="desabilitaRadio();"><div class="usuarios"> Mariane Regina Fortunato Nunes Gama </div>
			<span></span> 
		</label><br>
		 
		 <label class="radio"> 
			<input type="radio" value="Monica" name="r" onclick="desabilitaRadio();"><div class="usuarios">  Monica Luzia da Silva </div>
			<span></span> 
		</label><br> 
	 <div><!--aqui  fecha a div segunda  metade dos nomes --> 
		  
		
	</div> <!--Fecha a divi do radio group -->
 
	</div> <!-- Fecha a Div Classe principal -->

</div><!--Fecha envolveFilhas -->

</div><!--Fecha div pai --> 
 

<!--***************************************************************
	 		Aqui vou trazer os valores para a pessoa votar
	 	--> 

	 	<div class="principal2">

	 		<!-- <form action="gravaVoto2.php"  method="POST"> -->

		 	<div class="h1Checkbox">
		 		<h1 align="center"> Informe os valores da JBS que o funcionário tem na sua opinião </h1>
		 	</div><!--Fecha div h1 -->

		 	<div class="checkbox"> 

				  <div class="input">	
	 			  	<input class="ck" type="checkbox" id="" name="valor[]" value="Atitude_de_Dono"> 
	 			  </div><!--Fecha inpu -->

	 			  <div class="atitudes">
	  			  	<label for="">   Atitude de Dono  </label><br>
	  			  </div> <!--fecha atitude -->
				 
				  <div class="input">	
				  	<input class="ck" type="checkbox" id="" name="valor[]" value="Determinação">
				  </div><!--fecha atitude -->
				  	
				  <div class="atitudes">
				  	<label for=""> Determinação</label><br>
				  </div>

				  <div class="input">	
				  	<input class="ck" type="checkbox" id="" name="valor[]" value="Disciplina">
				  </div>

				  <div class="atitudes">
				  	<label for=""> Disciplina</label><br>
				  </div>

				  <div class="input">
				  	<input class="ck" type="checkbox" id="" name="valor[]" value="Simplicidade">
				  </div>

				 <div class="atitudes">
				  	<label for=""> Simplicidade</label><br>
				  </div>
				  
				  <div class="input">
				  	<input class="ck" type="checkbox" id="" name="valor[]" value="Franqueza">
				  </div>

				  <div class="atitudes">
				  	<label for=""> Franqueza</label><br>
				  </div> 

				  <div class="input">
				  	<input class="ck" type="checkbox" id="" name="valor[]" value="Hulmildade">
				  </div>

				 <div class="atitudes">
				  	<label for=""> Humildade</label><br>
				  </div> 

	 			 </div><!--fecha ckeckbox -->


	 			 <!--Aqui vai o textArea -->

	 			 <div class="textarea">

			  		<h3 align="left"> Cite algumas qualidades do funcionário!  </h3>
 
			  		<textarea cols=60 id="opiniao" rows="10" name="opiniao" maxlength="255" wrap="hard" placeholder="Informe o motivo que você acredita que esse funcionário merece ser o funcionário desse mês "></textarea>
  			
				</div> <!--fecha textarea -->   


	 			 <!--Aqui acaba o textArea --> 

	 			 <div class="botaoForm">  
					<button class="btn btn-green" type="submit" id="btn_votar" name="" value="Votar" onclick="msgDeOK();" disabled="true">Votar</button>
				<!--	<input type="submit" id="btn_votar" name="" value="Votar" onclick="msgDeOK();">  -->
				</div><!--Fecha a divi do botão form -->

		</div><!--fecha principal -->
 	</form>

	 	<!--***************************************************************
	 		Aqui termina os valores
	 	-->

 </main>
</body>
</html>