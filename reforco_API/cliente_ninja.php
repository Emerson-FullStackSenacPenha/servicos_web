<?php

$url = "http://localhost/servicos_web/reforco_API/api_ninja.php?id=23";
$ninja = ['codigo' => 'ABCDE1234',
                 'nome' => 'Emerson,'   
                ];

$estrutura_http = [

    'http' => [

        'method' => "PUT",
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($ninja)

    ]

];

$contexto = stream_context_create($estrutura_http);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;

?>