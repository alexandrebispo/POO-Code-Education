<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/27/15
 * Time: 11:45 AM
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('CLASS_DIR', '../src');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$cliente = new Education\Persist\Cliente();

?>
<!doctype html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <!-- Inclusão de CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css.map" type="text/css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>

</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td colspan="2">
                    <form method="post">
                        <button class="btn btn-warning" type="submit" value="cres" name="cres">Ordem Crescente</button>
                </td>
                <td>
                    <button class="btn btn-warning " type="submit" value="dec" name="dec">Ordem Decrescente</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Type</th>
            </tr>
            <?php   foreach($cliente->getClientes() as $key => $value){    ?>
                <tr>
                    <td><?php echo $value['idclientes']; ?></td>
                    <td><?php echo "<a href='mostraCliente.php?c=" .$value['idclientes']. "'>" .$value['nome']. "</a>";  ?></td>
                    <td><?php echo $value['tipo']; ?></td>
                </tr>
            <?php 
                    } 

                $cliente->flush();
            ?>
        </table>
    </div><!-- Fim div Container -->
</body>
</html>