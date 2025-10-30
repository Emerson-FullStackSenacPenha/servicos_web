<?php

$url = "http://localhost/servicos_web/exercicio_5/api.php";

$comentarios_cliente = [

    'cliente1' => [ 
        
        'avaliacao' => "Ruim",
        'mensagem' => ""
    
    ],

    'chefeFeliz' => "Obrigado pela preferência, volte sempre!",
    'chefeBolado' => "Que pena que não agradei, volte sempre!"

];

$estrutura_http = [

    'http' => [

        'method' => "POST",
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($comentarios_cliente)

    ]

];

$contexto = stream_context_create($estrutura_http);
$resposta = file_get_contents($url, false, $contexto);

echo $resposta;

?>