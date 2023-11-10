
<?php


require 'validador.php';
require 'models/message.php';
require 'template/admHeader.php';

$message = new Message();
$flassMessage = $message->getMessage();

if(!empty($flassMessage["msg"])){
    $message->clearMessage();
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/clienteR.css">
	<title> Painel de Controle</title>

</head>
<body>

	
	
 <!--div id="menuLateral"> 
 	<h3>Navegação Rápida</h3>
 	<ul>
 		<li><a href="#">Pedido Pendentes</a></li>
 		<li><a href="#">Clientes Ativos</a></li>
 		<li><a href=#>Produtos/Serviços Ativos</a></li>
 		<li><a href="#">Tickets Abertos</a></li>
 	</ul>
 </div-->


 <section id="corpoPrincipal">
 	<h3 id="tituloNavegacao">Registrar novo cliente</h3>
 	 <div id="cliente">
 	 	<form method="POST" action="processo.php">	
	 	 		<p class="titulo">Identificação</p>
	 	 	<div class="identificacao">	
	 	 		<label for="nome"> Nome:</label>
	 	 		<input type="text" name="nome" required>
	 	 		<label for="empresa"> Empresa:</label>
	 	 		<input type="text" name="empresa" required>
	 	 		<label for="cpf"> CPF:</label>
	 	 		<input type="text" name="cpf" required>
	 	 	<!--/div-->	

	 	 	<p class="titulo">Contato</p>
	 	 	<div class="identificacao">		
	 	 		<label for="nome"> E-mail</label>
	 	 		<input type="text" name="email" required>
	 	 		<label for="empresa"> Telefone</label>
	 	 		<input type="text" name="telefone" required>
	 	 		<label for="cpf"> Discord id</label>
	 	 		<input type="text" name="discord_id" required>
	 	 <div class="identificacao">	

	 	 	<input type="submit" name="enviar">
 	 	</form>	
 	 		

	<?php if(!empty($flassMessage['msg'])):?>

<p><?= $flassMessage["msg"]?></p>

<?php endif; ?>
 	 </div>


</body>
</html>

</body>
</html>