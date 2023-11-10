<?php
	
	require 'template/admHeader.php';

	



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Produtos</title>
	<link rel="stylesheet" type="text/css" href="css/produtos.css">
</head>
<body>


	<section id="corpoPrincipal">

 	<h3 id="tituloNavegacao">Registrar novo produto</h3>
 	 <div id="cliente">
 	 	<form method="POST" action="processoProduto.php">	
	 	 		<p class="titulo">Dados do produto</p>	

	 	 	<div class="identificacao">
	 	 		<!--select>
	 	 		<option value="">Nome da categoria</option>
	 	 		</select-->
	 	 		<br>
	 	 		<label for="nome"> Nome do produto:</label>
	 	 		<input type="text" name="nome">
	 	 		<label for="quantidade"> Quantidade:</label>
	 	 		<input type="text" name="quantidade">
	 	 		<label for="valor">Valor mensal</label>
	 	 		<input type="text" name="valorunico"  placeholder="0,00">
	 	 		<label for="valortrimenstral">Valor trimestral</label>
	 	 		<input type="text" name="trimestral"  placeholder="0,00">
	 	 		<label for="valor">Valor semestral</label>
	 	 		<input type="text" name="valorsemestral"  placeholder="0,00">
	 	 		<label for="valor">Valor anual</label>
	 	 		<input type="text" name="valoranual"  placeholder="0,00">
	 	 	<!--label for="nome">Ciclo de pagamento</label>
	 	 	<br>
	 	 		<select>
	 	 			<option value="#">único</option>
	 	 			<option value="#">Períodico</option>
	 	 		</select-->
	 	 			<br>
	 	 			<br>
	 	 		<input type="submit" name="enviar">

	 	 		<?php if(isset($_GET['ok'])):?>

	 	 		<h6> Produto cadastrado com sucesso</h6>

	 	 		<?php endif;?>
	 	 	</div>

 	 	</form>	


</body>
</html>