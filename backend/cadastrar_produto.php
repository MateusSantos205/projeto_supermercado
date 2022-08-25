<?php

include'conexao.php';

try{
    
    $produto = $_POST['produto'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $validade = $_POST['validade'];
    $valor = $_POST['valor'];
    $imagem = $_FILES['imagem'];

    // /////////////////////////////

    $nome_original_imagem = $_FILES['imagem']['name'];

    $extensao = pathinfo($nome_original_imagem, PATHINFO_EXTENSION);

    if($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg'){

        echo 'Formato de imagem inválido';

        exit;

    }

    $hash(md5($_FILES['imagem']['tmp_name'],true));

    $nome_final_imagem = $hash.'.'.$extensao;

    $pasta = '../img/upload';

    move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta.$nome_final_imagem);

    // /////////////////////////////

    $sql = "INSERT INTO tb_produtos (`produto`,`marca`,`categoria`,`validade`,`valor`,`imagem`) values ('$produto','$marca','$categoria', '$validade','$valor', '$nome_final_imagem')";

    $comando = $con->prepare($sql);

    // executa o comando cpm a query no banco de dados
    $comando->execute();

    // exibe msg de sucesso ao inserir
    // echo "Cadastro realizado com sucesso";

    header('location:  ../admin/gerenciar_produtos.php');

    // forçar fim da conexão
    $con = null;
    

}catch(PDOException $erro){
    echo $erro->getMessage();
    die();
}

?>

