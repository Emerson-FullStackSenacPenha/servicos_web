<?php

$url = "http://localhost/servicos_web/exercicio_4/api.php?pães=doce";
$resposta = file_get_contents($url);
echo $resposta;

?>