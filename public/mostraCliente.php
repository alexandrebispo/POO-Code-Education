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
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css.map" type="text/css"/>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css"/>
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
                <p><b>CPF/CNPJ:</b> <?php
                        if($cliente[$_GET["c"]]->getType() == "Pessoa Física"){
                            echo $cliente[$_GET["c"]]->getCpf();
                        }else{
                            echo $cliente[$_GET["c"]]->getCnpj();
                        }
                     ?></p>
                <p><b>Classificação: </b> <?php echo $cliente[$_GET["c"]]->getStar(); ?> </p>     
                <!-- Endereco de cobranca -->
                <?php  if(!empty($cliente[$_GET["c"]]->getCepCobranca())): ?>
                <p><b>Endereço de Cobrança:</b> <?php echo $cliente[$_GET["c"]]->getEnderecoCobranca(); ?></p>
                <p><b>Complemento de Cobrança: </b> <?php echo $cliente[$_GET["c"]]->getComplementoCobranca(); ?> </p>
                <p><b>CEP de Cobrança:</b> <?php echo $cliente[$_GET["c"]]->getCepCobranca(); ?> </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>