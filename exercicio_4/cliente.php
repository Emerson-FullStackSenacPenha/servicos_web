<?php

$url = "http://localhost/servicos_web/exercicio_4/api.php?paes=doce";
$resposta = file_get_contents($url);
echo $resposta;
$valores = json_decode($resposta, true);
?>