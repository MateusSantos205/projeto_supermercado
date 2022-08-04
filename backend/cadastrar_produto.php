<?php

include'conexao.php';

try{
    
    $produto = $_POST['produto'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $data = $_POST['data'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO tb_produtos (produto,marca,categoria,`data`,preco) value ('$produto','$marca','$categoria','$data','$preco',)";
    echo "Cadastrado com sucesso";

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>

