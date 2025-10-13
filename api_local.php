<?php

$url = "dados.json";
$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

echo $dados["nome"];
echo "<br><hr>";
echo $dados["hobbies"][0];
echo "<br><hr>";
echo $dados["gatos"]["nomes"][0];

?>
