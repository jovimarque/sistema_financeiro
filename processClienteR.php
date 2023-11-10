<?php
 /*

 código desativado


 */
require_once('models/clients.php');
require_once('dao/ClientesSql.php');


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

        echo 'ok';
    } else {
        echo 'false';
    }
} else {
    echo 'erro';
}
