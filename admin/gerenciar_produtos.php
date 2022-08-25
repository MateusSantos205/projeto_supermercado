<?php

    include '../backend/conexao.php';

    try{
        $sql = "SELECT *FROM tb_produtos";

        $comando = $con->prepare($sql);

        $comando->execute();

        $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // var_dump($dados);
        // echo "</pre>";

    }catch(PDOException $erro){
        echo $erro->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_table.css">
    <title>Gerenciar Produtos</title>
</head>
<body>

    <div id="container" >

    <h3>Gerenciar Produtos</h3>

    <hr>

    <button><a href="cadastro-produtos.html">Cadastrar produtos</a></button>

    <hr>

    <div id="tabela" >

        <table>
            <tr>
                <th>Id</th>
                <th>Produto</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Data de Validade</th>
                <th>Preço</th>
            </tr>
            <!--  -->
            <?php
                foreach ($dados as $produtos):
            ?>
            <!--  -->
            <tr>
                <td><?php echo $produtos['id']; ?></td>
                <td><?php echo $produtos['produto']; ?></td>
                <td><?php echo $produtos['marca']; ?></td>
                <td><?php echo $produtos['categoria']; ?></td>
                <td><?php echo $produtos['validade']; ?></td>
                <td>R$<?php echo $produtos['valor']; ?></td>
                <td><a href="alterar_produtos.php?id=<?php echo $produtos['id']; ?>">Alterar</a></td>
                <td><a href="../backend/_deletar_produtos.php?id=<?php echo $produtos['id']; ?>">Deletar</a></td>
            </tr>

            <?php
                endforeach;
            ?>

        </table>

    </div>


    </div>

    
</body>
</html>