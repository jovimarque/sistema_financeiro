<?php

	require_once("template/admHeader.php");
	require_once("sql.php");
	require_once("dao/produtosSql.php");

	$produtos =  new produtosSql($conn);
	$stmt = $produtos->pegarDados();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/produtoList.css">
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
 	<h3 id="tituloNavegacao">Lista de Produtos</h3>

 	 <div id="listaProduto">
 	 		<h6><a href="produtos.php">Registrar novo Produto</a></h6>
 	 	
 	 	<table>
 	 		<tr>
 	 			<th>
 	 			 #
 	 			</th> 	
 	 			<th>
 	 				Nome
 	 			</th>
 	 			<th>
 	 			 Quantidade
 	 			</th>
 	 			<th>
 	 			Valor Unico
 	 			</th>
 	 			<th>
 	 			Valor trimestral
 	 			</th>
 	 			<th>
 	 			Valor Semestral	
 	 			</th>
 	 			<th>
 	 			Valor Anual
 	 			</th> 
 	 			<th>
 	 			Status
 	 			</th>
 	 			<th>
 	 			 Gerenciar
 	 			</th> 			 			
 	 		</tr>


 	 			<?php 
 	 			foreach ($stmt as $dado):
 	 			?>
 	 		<tr>
 	 			<td> <?=  $dado->getId();?></td>
 	 			<td> <?=  $dado->getNome();?></td>
 	 			<td> <?=  $dado->getQuantidade();?></td>
 	 			<td>R$<?= $dado->getValorUnico();?>,00</td>
 	 			<td>R$<?=  $dado->getValorTrimestral();?>,00</td>
 	 			<td>R$<?=  $dado->getValorSemestral();?>,00</td>
 	 			<td>R$<?=  $dado->getValorAnual();?>,00</td>
 	 			<td> Ativo</td>
 	 			<td> <a href="editarItem.php?id=<?php echo $dado->getId();?>">Editar</a>  <a href="#">Excluir</a></td>
 	 	
 	 			

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