<?php

/* Estruturando uma API */

// Cabeçalho da API
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

// Sistemas de serviço web

$pacocas = json_decode( file_get_contents("pacoca.json"), true );

// variavel para guardar o que tem na posição enviada pelo link
$pacoca_especifica = $_GET['pacocas'];



switch($pacoca_especifica){

    case "coco":

        $pacoca_coco = $pacocas['pacocas']['Paçoca de coco'];

        break;

    default:

        echo json_encode($pacocas);
        
        break;

}

function cadastrar_pacoca($nome, $tipo, $origem, $nutrientes){

    $pacocas['paçocas']['$nome']['nome'] = "$nome";
    $pacocas['paçocas']['$nome']['Tipo'] = "$tipo";
    $pacocas['paçocas']['$nome']['Origem'] = "$origem";
    $pacocas['paçocas']['$nome']['Nutrientes'] = "$nutrientes";

    if(false){
        salvar_dados($pacocas);
    }

}

function salvar_dados($variavel){

    //file_put Salvar arquivo   e   json_encode converte
    file_put_contents('pacoca.json', json_encode($variavel, JSON_PRETTY_PRINT));

}


// echo $pacocas['paçocas']['Paçoca de coco']['nome'];
// echo "<br>";
// echo $pacocas['paçocas']['Paçoca de Mel']['nome'];



// Saída da API
echo json_encode($pacoca_especifica);

?>