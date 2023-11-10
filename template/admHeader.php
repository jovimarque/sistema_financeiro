<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=" css/adm.css">
	<title> Painel de Controle</title>

</head>
<body>

	<header id="cabecalho">
		<nav id="navegacao">
			<ul>
				<li> <a href="adm.php">Área cliente</a></li>
				<div class="dropdown">
				<li class="dropbtn">Clientes
					<div class="dropdown-content">
						<a href="clienteR.php">Registrar novo cliente</a>
						<a href="clienteList.php">Listar clientes</a>
						<a href="#">Clientes ativos</a>
						<a href="#">Clientes inativos</a>
					</div>
				</div>
				</li>
				<div class="dropdown">
				<li class="dropbtn">Pedidos
					<div class="dropdown-content">
						<a href="#">Pedidos pendentes</a>
						<a href="#">Pedidos ativos</a>
						<a href="#">Pedidos cancelados</a>
					</div>
				</div>
				</li>
				<div class="dropdown">
				<li class="dropbtn">Pagamentos
					<div class="dropdown-content">
						<a href="#">Listar pagamentos</a>
						<a href="#">Pagamentos ativos</a>
						<a href="#">Pagamentos pendentes</a>
					</div>
				</div>
				</li>
			<div class="dropdown">
				<li class="dropbtn">Produtos/Serviços
					<div class="dropdown-content">
						<a href="produtoList.php">Listar produtos</a>
						<a href="produtos.php">Cadastrar novo produto</a>
						<a href="#">Cadastrar nova categória</a>
					</div>
				</div>
				</li>
				<div class="dropdown">
				<li class="dropbtn">Ticket/Suporte
					<div class="dropdown-content">
						<a href="#">Listar Ticket's</a>
						<a href="#">Ticket's Aguardando</a>
					</div>
				</div>
			</li>
				<li>
				<form action="out.php">
				 <button type="submit" name="logout"> Sair</button>
				</form>
				</li>
			</ul>
		</nav>
	</header>