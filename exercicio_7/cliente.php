<?php

// 1. Defina sua chave de API
$chave = "AIzaSyD_2ChLdEOwkD9ki1KMK0gj9cDf257gzoo"; // Substitua pela sua chave REAL

// 2. Defina o endpoint com a chave na URL
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" . $chave;

// 3. Defina o prompt (a pergunta para a IA)
$pergunta = "5 nomes de filmes brasileiros";

// 4. Estrutura do corpo da requisição JSON para o Gemini
$requisicao = [
    "contents" => [
        [
            "parts" => [
                [
                    "text" => $pergunta
                ]
            ]
        ]
    ]
];

// 5. Estrutura HTTP (a mesma lógica, mas com o novo conteúdo)
$estrutura_http = [
    'http' => [
        'method' => "POST",
        'header' => "Content-Type: application/json\r\n", // Necessário para JSON
        'content' => json_encode($requisicao) // Converte o array para string JSON
    ]
];

$contexto = stream_context_create($estrutura_http);

// 6. Faz a requisição e obtém a resposta
$resposta_json = file_get_contents($url, false, $contexto);

// 7. Decodifica a resposta JSON para um objeto/array PHP
$resposta_objeto = json_decode($resposta_json);

// Acessar o caminho da requisição para exibir a resposta
echo "Pergunta: ".$pergunta;
echo "<hr>";
echo "Resposta: ".$resposta_objeto->candidates[0]->content->parts[0]->text;

?>