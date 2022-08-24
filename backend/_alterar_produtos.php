<?php

include 'conexao.php';

try{

    $id = $_POST['id'];

    $produto = $_POST['produto'];

    $marca = $_POST['marca'];

    $categoria = $_POST['categoria'];

    $validade = $_POST['validade'];

    $valor = $_POST['valor'];

    $sql = "UPDATE tb_produtos 
                SET `produto`= '$produto', `marca` = $marca, `categoria` = $categoria, `validade` = $validade, `valor` = $valor";

}catch(PDOException $erro){
    echo $erro->getMessage();
}


?>