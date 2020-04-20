<?php 

namespace Classes;

class usuarios{

		private $id;
		private $nome;
		private $cpf;
		private $votos;
		private $javotou;
		private $votouem;
		private $valores;
		private $descricao;

	public function getId(){
	 	return $this->id;
	 	 
	 }

	 public function setId($id){
	 	$this->id = $id; 
	 }
 
	 public function getNome(){
	 	return $this->nome;
	 }

	 public function setNome($nome){
	 	$this->nome = $nome;
	 }


	 public function getCPF(){
	 	return $this->cpf;
	 	//echo "estou no getCPF <br>";
	 	//echo "O valor do getCPF aqui é o ".$cpf."<br>"; 
	 }

	 public function setCPF($cpf){
	 	$this->cpf = $cpf;
	 	//echo "estou no setCPF <br>";
	 	//echo "O valor do setCPF aqui é o ".$cpf."<br>"; 
	 }

	  public function getVotos(){
	 	return $this->votos;
	 }

	 public function setVotos($votos){
	 	$this->votos = $votos;
	 }

	  public function getJavotou(){
	 	return $this->javotou;
	 }

	 public function setJavotou($javotou){
	 	$this->javotou = $javotou;
	 }

	  public function getVotouem(){
	 	return $this->votouem;
	 }

	 public function setVotouem($votouem){
	 	$this->votouem = $votouem;
	 }

	  public function getValores(){
	 	return $this->valores;
	 }

	 public function setValores($valores){
	 	$this->valores = $valores;
	 }

	  public function getDescricao(){
	 	return $this->descricao;
	 }

	 public function setDescricao($descricao){
	 	$this->descricao = $descricao;
	 }


}




 ?>