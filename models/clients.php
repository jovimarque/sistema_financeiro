<?php 


class Clientes {

	public $nome;
	public $empresa;
	public $email;
	public $discord_id;
	public $cpf;
	public $telefone;



	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmpresa(){
		return $this->empresa;
	}

	public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}	

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}


	public function getDiscord_id(){
		return $this->discord_id;
	}

	public function setDiscord_id($discord_id){
		$this->discord_id = $discord_id;
	}

/*
	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

*/
	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

}

interface clientsSQL{

	public function create(clientes $clientes);
}