<?php

$cd = simplexml_load_file('https://www.w3schools.com/xml/cd_catalog.xml');

foreach ($cd->CD as $cds) {
    
    echo "<p><b>".$cds->ARTIST."</b> lançou o album <b>".$cds->TITLE."</b> no ano de <b>".$cds->YEAR."</b></P>";
    echo "<br><hr>";

}

?>