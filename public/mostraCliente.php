<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/28/15
 * Time: 12:06 PM
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

define('CLASS_DIR', '../src');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$clientes = new Education\Persist\Cliente();
$id = $_GET["c"];
$cliente = $clientes->getCliente($id);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados de: <?php echo $cliente['nome']; ?></title>

    <!-- Inclusão de CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css.map" type="text/css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Dados Completos:</h3>
            </div>
            <div class="panel-body">
                <p><b>Nome Completo:</b> <?php echo $cliente['nome']." ".$cliente['sobrenome']; ?></p>
                <p><b>Telefone:</b> <?php echo $cliente['tel']; ?></p>
                <p><b>Endereço:</b> <?php echo $cliente['endereco']; ?></p>
                <p><b>CPF/CNPJ:</b> <?php
                        if($cliente['tipo'] == "Pessoa Física"){
                            echo $cliente['cpf'];
                        }else{
                            echo $cliente['cnpj'];
                        }
                     ?></p>
                <p><b>Classificação: </b> <?php echo $cliente['classificacao']; ?> </p>     
                <!-- Endereco de cobranca -->
                <?php  if(!empty($cliente['cep_cobranca'])): ?>
                <p><b>Endereço de Cobrança:</b> <?php echo $cliente['endereco_cobranca']; ?></p>
                <p><b>Complemento de Cobrança: </b> <?php echo $cliente['complemento_cobranca']; ?> </p>
                <p><b>CEP de Cobrança:</b> <?php echo $cliente['cep_cobranca']; ?> </p>
                <?php 
                    endif;
                    //$cliente->flush();
                 ?>
            </div>
        </div>
    </div>
</body>
</html>