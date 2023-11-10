<?php
    require 'validador.php';
    require "sql.php";

    

    $id = $_GET['id'];

    $stmt  = $conn->prepare("SELECT * FROM produtossql WHERE id = :id");
    $stmt->bindValue(":id",$id);
    $stmt->execute();
    $dados = $stmt->fetch();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="css/editarItem.css">
</head>
<body>
    

<div id="corpoPrincipal">
    <form action="processo.php" method="POST">
         <div class="titleForm"> Dados do Produto </div>
         <label for="id"> Id</label>
         <input type="text" placeholder=""  name="id" value="<?= $_GET['id'];?>">
         <label for="nome">Nome</label>
         <input type="text" placeholder=""  name="nome" value="<?= $dados['nome'];?>">
         <label for="for">Quantidade</label>
         <input type="text" placeholder="" value="<?= $dados['quantidade'];?>">
         <div class="titleForm"> Valores do Produto </div>
         <label for="mensal">Mensal</label>
         <input type="text" placeholder="" value="R$<?= $dados['valorunico'];?>">
         <label for="trimestral">Trimestral</label>
         <input type="text" placeholder="" value="R$<?= $dados['valortrimestral'];?>">
         <label for="semestral">Semestral</label>
         <input type="text" placeholder="" value="R$<?= $dados['valorsemestral'];?>">
         <label for="anual">Anual</label>
         <input type="text" placeholder="" value="R$<?= $dados['valoranual'];?>">
         <input type="submit" value="Salvar e editar" name="editar">

    
    </form>
</div>


</body>
</html>

<?php


?>