<?php

$pokemons = ['pikachu', 'charmander', 'bulbasaur','squirtle'];

foreach ($pokemons as $nomePokemon) {

$url = "https://pokeapi.co/api/v2/pokemon/$nomePokemon";

$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

$foto = $dados['sprites']['front_default'];
$nome = $dados['forms'][0]['name'];
$tipo = $dados['types'][0]['type']['name'];

echo "<img src=' ".$foto. " ' alt=''>  ";
echo "<br>";
echo " Nome: $nome ";
echo "<br>";
echo " Tipo: $tipo ";
echo "<br>";
echo "<hr>";

}

?>