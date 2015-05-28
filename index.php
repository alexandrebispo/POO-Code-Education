<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/27/15
 * Time: 11:45 AM
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once("array.php");
?>
<!doctype html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <!-- Inclusão de CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css.map" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

</head>
<body>
    <?php
        if(isset($_POST['cres'])){
            ksort($cliente);
        }elseif(isset($_POST['dec'])){
            krsort($cliente);
        }else{
            ksort($cliente);
        }
    ?>
    <table class="table table-striped">
        <tr>
            <td>
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
        </tr>
        <?php   foreach($cliente as $key => $value){    ?>
            <tr>
                <td><?php echo $value->getId();  ?></td>
                <td><?php echo "<a href='mostraCliente.php?c=" .$value->getId(). "'>" .$value->getNome(). "</a>";  ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>