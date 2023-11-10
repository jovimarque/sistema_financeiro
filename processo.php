<?php
require_once('sql.php');
require_once('models/user.php');
require_once('dao/UserSql.php');
require_once('models/message.php');
require_once('models/clients.php');
require_once('dao/ClientesSql.php');
require_once('dao/produtosSql.php');
require_once('models/produto.php');
require_once('dao/produtosSql.php');
require_once('models/produto.php');


// Supondo que você tenha uma instância de conexão com o banco de dados chamada $conn
$message = new Message();

$userDAO = new UserDAO($conn);
$login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);



// Supondo que você tenha recebido o login e senha do formulário

if (isset($login) && isset($senha)) {
    if ($userDAO->validacao($login, $senha)) {
        header('Location: adm.php');
    } else {
        $message->setMessage("Login ou senha inválidos","back");
    }
} else {
    $message->setMessage("Por favor preencha os campos  para acesso ao sistema","back");
}



// Registro de clientes
$clientSql = new Clientsql($conn);




if (isset($_POST['enviar'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $discord_id = filter_input(INPUT_POST, 'discord_id', FILTER_SANITIZE_STRING);

    if (isset($nome) && isset($empresa) && isset($email) && isset($cpf) && isset($discord_id)) {
        // Criar objeto Clientes
        $clientes = new Clientes();
        $clientes->setNome($nome);
        $clientes->setEmpresa($empresa);
        $clientes->setEmail($email);
        $clientes->setCpf($cpf);
        $clientes->setDiscord_id($discord_id);

        // Chamar o método create para salvar os dados no banco de dados
        $clientSql->create($clientes);

         header('Location:clienteR.php');

         $message->setMessage("Cliente cadastrado com sucesso","back");
    } else{
       
        return false;

    }

} else {
    echo 'erro';
}




if(isset($_POST['editar'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];


    $stmt = $conn->prepare("UPDATE `produtossql` SET `nome` = :nome WHERE `produtossql`.`id` =  :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(':nome', $nome);   
    $stmt->execute();

    header('Location:produtoList.php');

    
}


