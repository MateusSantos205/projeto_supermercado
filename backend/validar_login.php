<?php

include 'conexao.php';

try{

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT *FROM tb_login WHERE email = '$usuario' AND BINARY senha = '$senha' AND ativo = 1";

    $comando = $con->prepare($sql);
    $comando->execute();
    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    if($dados != null){

        header('location: ../admin/gerenciar_produtos.php');

    }else{
        echo "Usuario ou senha inválidos";
    }

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>