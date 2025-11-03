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
        $id = $_GET['id'];
        atualizar_lista_ninjas($id);
        break;
        
    case "DELETE";

        break;
        
    default;

        break;

};

function verificar_codigo_secreto(){

    $chave_acesso = json_decode(file_get_contents("php://input"), true);

    if( $chave_acesso['codigo'] == "ABCDE1234" ) {

        echo json_encode($chave_acesso['nome']."  A mensagem secreta é: Não existe mensagem secreta!", JSON_UNESCAPED_UNICODE);

    } else { echo json_encode("Chave de acesso negada!" ,JSON_UNESCAPED_UNICODE); }

};

function atualizar_lista_ninjas($id){

    $lista_ninjas = [

        'ninja' => [

            '01' => [
                
            'id' => "01",
            'nome' => "Naruto Uzumaki",
            'idade' => 12

            ],

            '23' => [

                'id' => "23",
                'nome' => "gabriel jesus",
                'idade' => 21

            ]

        ]

    ];

    if($id == $lista_ninjas['ninja']['23']['id']){

        $ninja_atualizado = json_decode( file_get_contents("php://input")  ,true );
        $lista_ninjas['ninja']['23']['nome'] = $ninja_atualizado['nome'];
        echo json_encode( $lista_ninjas['ninja']['23']);

    } else {

        echo json_encode("Erro: Nenhum ninja cadastrado com esse ID");

    }             

}

?>