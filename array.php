<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/27/15
 * Time: 12:23 PM
 */

include_once("Cliente.php");
/*
$cliente = [
    "cliente1"  => ["id" => "1", "nome" => "alexandre", "sobrenome" => "Bispo", "tel" => "983415878", "endereco" => "Rua Adelaide", "cpf" =>"954.279.648-00"],
    "cliente2"  => ["id" => "2", "nome" => "Alice", "sobrenome" => "Bispo", "tel" => "987687679", "endereco" => "Rua Adelaide", "cpf" =>"988.586.223-40"],
    "cliente3"  => ["id" => "3", "nome" => "Yasmin", "sobrenome" => "Bispo", "tel" => "989876543", "endereco" => "Rua Adelaide", "cpf" =>"254.605.302-70"],
    "cliente4"  => ["id" => "4", "nome" => "Yngred", "sobrenome" => "Bispo", "tel" => "978765789", "endereco" => "Rua Adelaide", "cpf" =>"448.237.321-46"],
    "cliente5"  => ["id" => "5", "nome" => "Rafael", "sobrenome" => "Algum", "tel" => "961243546", "endereco" => "Rua Adelaide", "cpf" =>"371.446.243-00"],
    "cliente6"  => ["id" => "6", "nome" => "Amanda", "sobrenome" => "Oliveira", "tel" => "765987678", "endereco" => "Rua Adelaide", "cpf" =>"773.332.851-97"],
    "cliente7"  => ["id" => "7", "nome" => "Ana", "sobrenome" => "Bispo", "tel" => "78654345", "endereco" => "Rua Adelaide", "cpf" =>"075.443.368-40"],
    "cliente8"  => ["id" => "8", "nome" => "Sylvia", "sobrenome" => "Bueno", "tel" => "798656432", "endereco" => "Rua Adelaide", "cpf" =>"871.592.891-88"],
    "cliente9"  => ["id" => "9", "nome" => "Adriana", "sobrenome" => "Braga", "tel" => "7766554433", "endereco" => "Rua Adelaide", "cpf" =>"033.773.285-05"],
    "cliente10" => ["id" => "10", "nome" => "Leandro", "sobrenome" => "da Costa", "tel" => "965467731", "endereco" => "Rua Adelaide", "cpf" =>"070.473.746-98"]
];
*/
    $cliente[1]   = new Cliente(1, "alexandre", "Bispo", 983415878, "Rua Adelaide", 95427964800);
    $cliente[2]   = new Cliente("2", "Alice", "Bispo", "987687679", "Rua Adelaide", "988.586.223-40");
    $cliente[3]   = new Cliente("3", "Yasmin", "Bispo", "989876543", "Rua Adelaide", "254.605.302-70");
    $cliente[4]   = new Cliente("4", "Yngred", "Bispo", "978765789", "Rua Adelaide", "448.237.321-46");
    $cliente[5]   = new Cliente("5","Rafael", "Algum", "961243546", "Rua Adelaide", "371.446.243-00");
    $cliente[6]   = new Cliente("6","Amanda", "Oliveira", "765987678", "Rua Adelaide", "773.332.851-97");
    $cliente[7]   = new Cliente("7", "Ana", "Bispo", "78654345", "Rua Adelaide", "075.443.368-40");
    $cliente[8]   = new Cliente("8", "Sylvia", "Bueno", "798656432", "Rua Adelaide", "871.592.891-88");
    $cliente[9]   = new Cliente("9", "Adriana", "Braga", "7766554433", "Rua Adelaide", "033.773.285-05");
    $cliente[10]   = new Cliente("10", "Leandro", "da Costa", "965467731", "Rua Adelaide","070.473.746-98");