<?php

include 'backend/conexao.php';


try{

    $sql = "SELECT * FROM tb_produtos";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $error){
    echo $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-produtos.css">
    <title>Lista de Produtos</title>
</head>
<body>

    <div id="container">
        <h3 class="h3-produtos" >Lita de Produtos</h3>

        <div id="grid-produtos">

        <!--  -->
        <?php
            foreach($dados as $d):
        ?>
        <!--  -->

        <figure class="figure-produtos">
            <img class="img-produtos" src="img/produto-faltando.png" alt="">

            <figcaption class="fig-produtos" >
                <h4><?php echo $d ['produto'];?></h4>
                <h5><?php echo $d ['marca'];?></h5>
                <h5><?php echo $d ['categoria'];?></h5>
                <h5><?php echo $d ['validade'];?></h5>
                <h5>R$<?php echo $d ['valor'];?></h5>
                <button class="btn-comprar">Comprar</button>
            </figcaption>

        </figure>

        <!--  -->
        <?php
            endforeach;
        ?>
        <!--  -->

        </div>

    </div>
    
</body>
</html>