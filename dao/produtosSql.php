<?php 

require 'models/produto.php';

class produtosSql implements Produtos {

	public $conn;

	public function __construct(PDO $conn) {
		$this->conn = $conn;
	}

		public function createProduto(Produto $produto) {
		 $stmt = $this->conn->prepare("INSERT INTO `produtossql` (nome,quantidade,valorunico,valortrimestral,valorsemestral,valoranual) VALUES(:nome,:quantidade,:valorUnico,:trimestral,:valorSemestral,:valorAnual) ");	
			
			$nome = $produto->getNome();
			$quantidade = $produto->getQuantidade();
			$valorUnico = $produto->getValorUnico();
			$valorTrimestral = $produto->getValorTrimestral();
			$valorSemestral = $produto->getValorSemestral();
			$valorAnual = $produto->getValorAnual();    
					
			$stmt->bindParam(':nome', $nome);
			$stmt->bindParam(':quantidade',$quantidade);
			$stmt->bindParam(':valorUnico',$valorUnico);
		    $stmt->bindParam(':trimestral',$valorTrimestral);
			$stmt->bindParam(':valorSemestral',$valorSemestral);
			$stmt->bindParam(':valorAnual',$valorAnual);

			$stmt->execute();
			}

			public function pegarDados(){
				$func = [];
				$stmt = $this->conn->query("SELECT * FROM produtossql");
				$dados = $stmt->fetchAll();

				foreach ($dados as $dado) {
					$newProduto =  new Produto();
					$newProduto->setid($dado['id']);
					$newProduto->setNome($dado['nome']);
					$newProduto->setQuantidade($dado['quantidade']);
					$newProduto->setValorUnico($dado['valorunico']);
					$newProduto->setValorTrimestral($dado['valortrimestral']);
					$newProduto->setValorSemestral($dado['valorsemestral']);
					$newProduto->setValorAnual($dado['valoranual']);


					$func[] = $newProduto;
				}

					return $func;
			}


			

		
}

