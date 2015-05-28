<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/28/15
 * Time: 12:06 PM
 */

include_once("array.php");
if(!array_key_exists($_GET["c"], $cliente)){   header("location: index.php");  }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados de: <?php echo $cliente[$_GET["c"]]->getNome(); ?></title>

    <!-- Inclusão de CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css.map" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Dados Completos:</h3>
            </div>
            <div class="panel-body">
                <p><b>Nome Completo:</b> <?php echo $cliente[$_GET["c"]]->getNome()." ".$cliente[$_GET["c"]]->getSobrenome(); ?></p>
                <p><b>Telefone:</b> <?php echo $cliente[$_GET["c"]]->getTel(); ?></p>
                <p><b>Endereço:</b> <?php echo $cliente[$_GET["c"]]->getEndereco(); ?></p>
               <p><b>CPF:</b> <?php echo $cliente[$_GET["c"]]->getCpf() ?></p>
            </div>
        </div>
    </div>
</body>
</html>