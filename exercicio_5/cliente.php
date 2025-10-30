<?php

$url = "http://localhost/servicos_web/exercicio_5/api.php";

$comentarios_cliente = [

    'cliente' => [ 
        
        'avaliacao' => "Ruim",
        'mensagem' => "Tava meio estranho o sabor"
    
    ],

    'chefeFeliz' => "Obrigado pela preferência, volte sempre!",
    'chefeBolado' => "Que pena que não agradei, volte sempre infeliz!"

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

echo "Cliente: ".$comentarios_cliente['cliente']['mensagem'];
echo "<br>";
echo "Chefe: ".$resposta;

?>