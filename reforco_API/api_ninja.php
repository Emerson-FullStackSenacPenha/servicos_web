<?php

header("Content-Type: application/json; charset= UTF-8");
header("Access-control-Allow-Origin: *");

$metodo = $_SERVER["REQUEST_METHOD"];

switch($metodo){

    case "GET";
        echo json_encode("Método GET consultado com sucesso!");
        break;
    
    case "POST";
        verificar_codigo_secreto();
        break;
        
    case "PUT";

        break;
        
    case "DELETE";

        break;
        
    default;

        break;

};

function verificar_codigo_secreto(){

    $chave_acesso = json_decode(file_get_contents("php://input"), true);

    if( $chave_acesso['codigo'] == "ABCDE1234" ) {

        echo json_encode("A mensagem secreta é: Não existe mensagem secreta!");

    } else { echo json_encode("Chave de acesso negada!"); }

};

?>