<?php

/* Estruturando uma API */

// Cabeçalho da API
header("Content-Type : application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$alunos = [

    ["nome" => "Anna", "curso" => "Design", "idade" => 19],
    ["nome" => "Carlos", "curso" => "TI", "idade" => 22],
    ["nome" => "Karla", "curso" => "Games", "idade" => 25]

];

// Saída da API
echo json_encode($alunos);

?>