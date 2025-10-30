<?php

header("Content-Type: application/json; charset= UTF-8");
header("Access-control-Allow-Origin: *");

$metodo = $_SERVER["REQUEST_METHOD"];

switch($metodo){

        case "POST";
            resposta_chefe();
            break;
};

function resposta_chefe() {

    $comentario = json_decode(file_get_contents("php://input"), true);

    if( $comentario['cliente']['avaliacao'] == "Gostei" ) {

        echo json_encode($comentario['chefeFeliz'], JSON_UNESCAPED_UNICODE);

    } else { echo json_encode($comentario['chefeBolado'], JSON_UNESCAPED_UNICODE); }

}

?>