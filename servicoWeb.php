<?php

// URL da API
$url = "";

// Faz a requisição e guarda a resposta
$resposta = file_get_contents($url);

// Converter o JSon em array associativo
$dados = json_decode($resposta, true);

// Pega o valor do array
$valor = $dados[""];

// Mostrar no navegador
echo $valor;

?>