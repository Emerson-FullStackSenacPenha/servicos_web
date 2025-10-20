<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$paes = json_decode(file_get_contents("pao.json"), true);

$pao_especifico = $_GET['pães'];

switch($pao_especifico){

    case "doce":

        $pao_doce = $paes['pães']['Pão doce'];
        echo json_encode($pao_doce);
        break;

    default:

        echo json_encode($paes);
        break;

}

function cadastrar_pao($nome, $tipo, $origem, $nutrientes){

    $pacocas['pães']['$nome']['nome'] = "$nome";
    $pacocas['pães']['$nome']['Tipo'] = "$tipo";
    $pacocas['pães']['$nome']['Origem'] = "$origem";
    $pacocas['pães']['$nome']['Nutrientes'] = "$nutrientes";

    if(false){
        salvar_dados($paes);
    }

}

function salvar_dados($variavel){

    //file_put Salvar arquivo   e   json_encode converte
    file_put_contents('pao.json', json_encode($variavel, JSON_PRETTY_PRINT));

}

?>