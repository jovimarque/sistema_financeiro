<?php 

/**
 * 
 */
class Produto
{

	public $id;
	public $nome;
	public $quantidade;
	public $valorUnico;
	public $valorTrimestral;
	public $valorSemestral;
	public $valorAnual;
	//public $cicloPagamento;


public function setid($id){
		$this->id = $id;
	}

	public function getid(){

		return $this->id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){

		return $this->nome;
	}

	public function setValorUnico($valorUnico){

		$this->valorUnico = $valorUnico;
	}

	public function getValorUnico(){
		return $this->valorUnico;
	}

	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function getQuantidade(){

		return $this->quantidade;
	}



	public function SetValorTrimestral($valorTrimestral){

		$this->valorTrimestral = $valorTrimestral;
	}

	public function getValorTrimestral(){
		return $this->valorTrimestral;
	}
	

	public function setValorSemestral($valorSemestral){
		$this->valorSemestral = $valorSemestral;
	}

	public function getValorSemestral(){
		return $this->valorSemestral;
	}

	public function  setValorAnual($valorAnual){

		$this->valorAnual = $valorAnual;
	}

	public function getValorAnual(){
		return $this->valorAnual;
	}
}

interface Produtos {
	public function createProduto(Produto $produto);
}