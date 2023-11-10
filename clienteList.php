
<?php

require 'sql.php';
require 'validador.php';
require 'models/message.php';
require 'dao/ClientesSql.php';
require 'template/admHeader.php';

$clientes = new clientsql($conn);
$stmt = $clientes->pegarDados();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/clienteList.css">
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
 	<h3 id="tituloNavegacao">Listar clientes</h3>

 	 <div id="listaCliente">
 	 	
 	 	<table>
 	 		<tr>
 	 			<th>
 	 				Nome
 	 			</th>
 	 			<th>
 	 			 Email
 	 			</th>
 	 			<th>
 	 			Empresa
 	 			</th>
 	 			<th>
 	 			Status
 	 			</th>	 		
 	 		</tr>

 	 			<?php 
 	 			foreach ($stmt as $dado ):
 	 			?>
 	 		<tr>

 	 			<td> <?=  $dado->getNome();?></td>
 	 			<td> <?=  $dado->getEmail();?></td>
 	 			<td> <?=  $dado->getEmpresa();?></td>
 	 			<td> Ativo</td>
 	 			

 	 		</tr>
 	 		<?php
 	 			endforeach;
 	 		?>
 	 	</table>
 	 </div>
 	 
 </section>
</body>
</html>

</body>
</html>