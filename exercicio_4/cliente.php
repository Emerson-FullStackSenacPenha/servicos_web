<?php

$url = "http://localhost/servicos_web/exercicio_4/api.php";
$resposta = file_get_contents($url);
$valores = json_decode($resposta, true);
echo $resposta;
echo "<br>";
echo "<br>";
// Como acessar os dados
echo $valores['pães']['Pão doce']['nome'];

?>