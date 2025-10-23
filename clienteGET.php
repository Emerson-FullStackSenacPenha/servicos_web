<?php

// Do lado do cliente (Consumindo a API)

// De uma url com endpoint para requisitar algum serviço da API

$url = "http://localhost/servicos_web/apiGET.php?pacocas=coco";

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

echo $resposta;

?>