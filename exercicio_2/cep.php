<?php

$url = "https://brasilapi.com.br/api/cep/v1/03639000";
$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

$cep = $dados['cep'];
$estado = $dados['state'];
$cidade = $dados['city'];
$bairro = $dados['neighborhood'];
$rua = $dados['street'];
$servico = $dados['service'];

echo " Cep: $cep ";
echo "<br>";
echo " Estado: $estado ";
echo "<br>";
echo " Cidade: $cidade ";
echo "<br>";
echo " Bairro: $bairro ";
echo "<br>";
echo " Rua: $rua ";
echo "<br>";
echo " Serviço: $servico ";

?>