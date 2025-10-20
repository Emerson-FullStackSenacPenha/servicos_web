<?php

/* Estruturando uma API */

// Cabeçalho da API
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

// Sistemas de serviço web

// Variavel que recebe o que tem no .json que vai para o url
$pacocas = json_decode( file_get_contents("pacoca.json"), true );

// variavel para guardar o que tem na posição enviada pelo link do cliente.php
$pacoca_especifica = $_GET['pacocas'];

// função que decide o que vai ser retornado para o cliente
switch($pacoca_especifica){

    // Se o "endpoint" for "coco"
    case "coco":

        // Variavel recebe o parametro de coco
        $pacoca_coco = $pacocas['pacocas']['pacoca de coco'];
        // E exibe o resultado que esta dentro do array associativo de Paçoca de coco
        echo json_encode($pacoca_coco);

        break;

    default:

        // Caso contrario, exibe o conteúdo todo de "pacocas.json"
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
// echo json_encode($pacoca_especifica);

?>