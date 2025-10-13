<?php

$url = "cliente.json";
$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

$nome = $dados["nome"];
$idade = $dados["idade"];
$profissao = $dados["profissao"];
$cidade = $dados["cidade"];
$estado = $dados["estado"];
$hobbies = $dados["hobbies"];

echo "<h1> Cliente </h1>";


echo "<b>Nome: </b>".$nome;
echo "<br>";
echo "<b>Idade: </b>".$idade;
echo "<br>";
echo "<b>Profissão: </b>".$profissao;
echo "<br>";
echo "<b>Cidade: </b>".$cidade;
echo "<br>";
echo "<b> Hobbies: </b>";
foreach ($hobbies as $hobbie){
    echo $hobbie.", ";
}

?>