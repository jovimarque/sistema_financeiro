<?php 


require_once('models/clients.php');

class clientsql implements clientsSQL{

	public $conn;

		public function __construct(PDO $conn){

				$this->conn = $conn;
		}

					public function create(Clientes $clientes) {
					    $stmt = $this->conn->prepare("INSERT INTO clientes (nome, empresa, email, cpf, discord_id) VALUES(:nome, :empresa, :email, :cpf,:discord_id)");
					    
					    $nome = $clientes->getNome();
					    $empresa = $clientes->getEmpresa();
					    $email = $clientes->getEmail();
					    $cpf = $clientes->getCpf();
					    //$telefone = $clientes->getTelefone();
					    $discord_id = $clientes->getDiscord_id();
					    
					    $stmt->bindParam(':nome', $nome);
					    $stmt->bindParam(':empresa', $empresa);
					    $stmt->bindParam(':email', $email);
					    $stmt->bindParam(':cpf', $cpf);
					    //$stmt->bindParam(':telefone', $telefone);
					    $stmt->bindParam(':discord_id', $discord_id);
					    
					    $stmt->execute();
			}

	public function pegarDados(){
		$func = [];

		
		$stmt = $this->conn->query('SELECT * FROM clientes');
		$dados = $stmt->fetchAll();

		foreach ($dados as $value) {
		$newcliente = new Clientes();

		$newcliente->setNome($value['nome']);
		$newcliente->setEmail($value['email']);
		$newcliente->setEmpresa($value['empresa']);

		$func[] = $newcliente;
			

		}

		return $func;
	}



}


