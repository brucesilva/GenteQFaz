<?php 

namespace Classes;
use Classes\usuarios;
use Classes\conexaoBDO;



class usuariosCrud{


 	//Essa classe é do Cadastro
	public static function inserir(usuarios $user){

		$conn = new conexaoBDO();//instancia do BDO 
		//Verificar se o ID já existe
		$sqlID = "SELECT id,cpf FROM usuarios WHERE id = ? or cpf = ?"; 
		$stmt = conexaoBDO::getConn()->prepare($sqlID);

		$stmt->bindvalue(1,$user->getId());  
		$stmt->bindvalue(2,$user->getCPF());
		$stmt->execute();

		if($stmt->rowCount() > 0){
			//echo "ID ou CPF já existe no BD";
			return 3;

		}else{
			$sql = "INSERT INTO usuarios (id, nome, cpf) VALUES (?,?,?)";

			$stmt = conexaoBDO::getConn()->prepare($sql);

			$stmt->bindvalue(1,$user->getId());
			$stmt->bindvalue(2,$user->getNome());
			$stmt->bindvalue(3,$user->getCPF()); 
			 
			$stmt->execute();
			$conn = null;

			if($stmt->rowCount() >0){
				return 1;
			}else{
				return 0;
			}  
		} 
		
	}


	public static function Javotou(usuarios $user){
			$conn = new conexaoBDO();//instancia do BDO 
 
			
			$sql = "UPDATE usuarios SET javotou = 1 WHERE cpf = ?";

			$stmt = conexaoBDO::getConn()->prepare($sql); 

			$stmt->bindvalue(1,$user->getCPF());
			  
			$stmt->execute();
			$conn = null; 
	}

	public static function Votouem(usuarios $user){
			$conn = new conexaoBDO();//instancia do BDO 
 
			
			$sql = "UPDATE usuarios SET votouem = ? WHERE cpf = ?"; 
			$stmt = conexaoBDO::getConn()->prepare($sql); 

			$stmt->bindvalue(1,$user->getVotouem());
			$stmt->bindvalue(2,$user->getCPF());
			  
			$stmt->execute();
			$conn = null; 
	}

	public static function PessoaVotada(usuarios $user){
			$conn = new conexaoBDO();//instancia do BDO 
 
			
			$sql = "UPDATE usuarios SET votos = votos + 1 WHERE nome = ?"; 
			$stmt = conexaoBDO::getConn()->prepare($sql); 

			$stmt->bindvalue(1,$user->getNome()); 

			$stmt->execute();
			$conn = null; 
	}

	public static function Valores(usuarios $user){
			$conn = new conexaoBDO();//instancia do BDO 
 
			
			//$sql = "UPDATE usuarios SET valores = ?, descricao = ? WHERE nome = ?"; 
			$sql = "UPDATE usuarios SET valores = ?, descricao = ? WHERE nome = ? ";

			$stmt = conexaoBDO::getConn()->prepare($sql); 

			$stmt->bindvalue(1,$user->getValores()); 
			$stmt->bindvalue(2,$user->getDescricao()); 
			$stmt->bindvalue(3,$user->getNome()); 

			$stmt->execute();
			$conn = null; 
	}

 
}


/*
 
 
  
//adicionando os valores na pessoa votada
$sqlAddVoto = "UPDATE usuarios SET valores = $valroes, descricao =$motivo WHERE nome = '$votado' ";

*/

 ?>

