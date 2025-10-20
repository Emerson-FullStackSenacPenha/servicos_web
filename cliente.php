<?php

/* Consumo de API - Utiliza de um serviço WEB */

    // Requisição GET (Protocolo HTTP)
    $url = "http://localhost/servicos_web/api.php?pacocas=coco";

    // Guardar um valor de resposta da API
    $resposta = file_get_contents($url);

    // Converter o Json em array asociativo
    // $dados = json_decode($resposta, true);

    // Pegar o valor do array
    // $valor = $dados[""];

    // Mostrar no navegador
    echo $resposta;

?>