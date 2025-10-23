<?php

// Cabeçalho que contém metadados (Configurações) sobre a API

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

// Sistemas API (Códigos php)

switch($metodo){

    case "GET":
        metodoGET();
        break;

    case "POST":

        break;

    default:
        echo"Método não identificado";
        break;        

}

function metodoGET(){

    $pacocas = json_decode( file_get_contents("pacoca.json"), true );
    
    $pacoca_especifica = $_GET['pacocas'];

    switch($pacoca_especifica){

        case "coco":
            $pacoca_coco = $pacocas['pacocas']['pacoca de coco'];
            echo json_encode($pacoca_coco);
            break;

        default:
            echo json_encode($pacocas);
            break;

    }

}

?>