<?php

include'conexao.php';

try{
    
    $produto = $_POST['produto'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $validade = $_POST['validade'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO tb_produtos (produto,marca,categoria,validade,valor) value ('$produto','$marca','$categoria','$validade','$valor')";

    $comando = $con->prepare($sql);

    // executa o comando cpm a query no banco de dados
    $comando->execute();

    // exibe msg de sucesso ao inserir
    echo "Cadastro realizado com sucesso";

    // forçar fim da conexão
    $con = null;
    

}catch(PDOException $erro){
    echo $erro->getMessage();
    die();
}

?>

