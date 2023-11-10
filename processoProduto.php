<?php 
require_once('dao/produtosSql.php');
require_once('models/produto.php');
require_once('sql.php');




$produtoSql = new produtosSql($conn);


    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $quantidade = filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_STRING);
    $valorUnico = filter_input(INPUT_POST,'valorunico',FILTER_SANITIZE_STRING);
    $valorTrimestral = filter_input(INPUT_POST,'trimestral',FILTER_SANITIZE_STRING);
    $valorSemestral = filter_input(INPUT_POST,'valorsemestral',FILTER_SANITIZE_STRING);
    $valorAnual = filter_input(INPUT_POST,'valoranual',FILTER_SANITIZE_STRING);






    if(isset($nome) &&  isset($quantidade)  && isset($valorUnico) &&  isset($valorTrimestral) && isset($valorSemestral) && isset($valorAnual)){

        $produto = new Produto();
        $produto->setNome($nome);
        $produto->setQuantidade($quantidade);
        $produto->setValorUnico($valorUnico);
        $produto->setValorTrimestral($valorTrimestral);
        $produto->setValorSemestral($valorSemestral);
        $produto->setValorAnual($valorAnual);

        $produtoSql->createProduto($produto);

       header('Location: produtos.php?ok');

       
    } else {
       return false;
    }


