<?php

include '../backend/conexao.php';

$id = $_GET['id'];

try{
$sql = "SELECT * FROM tb_produtos WHERE id = $id";

$comando = $con->prepare($sql);
$comando->execute();
$dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($dados);
    // echo "<pre>";


}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>

<!-- ///////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Alterar Produtos</title>
</head>
<body>

    <div id="container">
        <h3>Alterar Produtos</h3>

        <form action="" method="post">

            <div id="grid_alterar">
                <div>
                    <laber for="">ID</laber>
                    <input type="text" name="id" id="id" value="<?php echo $dados[0]['id']?>" readonly>
                </div>

                <div>
                    <laber for="">Produto</laber>
                    <input type="text" name="produto" id="produto" value="<?php echo $dados[0]['produto']?>">
                </div>

                <div>
                    <laber for="">Marca</laber>
                    <input type="text" name="marca" id="marca" value="<?php echo $dados[0]['marca']?>">
                </div>

                <div>
                    <laber for="">Categoria</laber>
                    <input type="text" name="categoria" id="categoria" value="<?php echo $dados[0]['categoria']?>">
                </div>

                <div>
                    <laber for="">Validade</laber>
                    <input type="text" name="validade" id="validade" value="<?php echo $dados[0]['validade']?>">
                </div>

                <div>
                    <laber for="">Valor</laber>
                    <input type="text" name="valor" id="valor" value="<?php echo $dados[0]['valor']?>">
                </div>

            </div>

            <input type="submit" value="Salvar">

        </form>

    </div>
    
</body>
</html>