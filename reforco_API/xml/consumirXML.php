<?php

$usuarios = simplexml_load_file('dados.xml');
echo "<h1> Dados dos usuários </h1>";
echo "<h3> Nome:: </h3>".$usuarios-> usuario[0]->nome;
echo "<h3> Altura:: </h3>".$usuarios-> usuario[0]->altura;
echo "<h3> Hobbies:: </h3>".$usuarios-> usuario[0]->hobbies->hobbie[1];

$cd = simplexml_load_file('https://www.w3schools.com/xml/cd_catalog.xml');

foreach ($cd->CD as $cds) {
    
    echo "<p><b>".$cds->ARTIST."</b> lançou o album <b>".$cds->TITLE."</b> no ano de <b>".$cds->YEAR."</b></P>";
    echo "<br><hr>";

}

?>