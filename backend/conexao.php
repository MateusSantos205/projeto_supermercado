<?php

try{

define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('BASEDADOS','db_supermercado');

$con = new PDO("mysql:host=".SERVIDOR.";dbname=".BASEDADOS, USUARIO, SENHA);
     // set the PDO error mode to exception
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

}catch(PDOException $erro){
    echo $erro->getMessage();
};

?>