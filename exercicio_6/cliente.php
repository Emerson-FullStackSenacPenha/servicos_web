<?php

$url = "http://localhost/servicos_web/exercicio_6/api.php?id=1";

$estrutura_http = [

    'http' => [

        'method' => "GET",
        'header' => "Content-Type: application/json\r\n",
        
    ]

];

$contexto = stream_context_create($estrutura_http);
$resposta = file_get_contents($url, false, $contexto);
echo $resposta;

?>