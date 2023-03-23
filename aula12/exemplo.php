<h2>Tabuada GET</h2>
<?php

for($contador = 0; $contador <= 10; $contador++){
    $resultado = $_GET['tabuada'] * $contador;
    echo  $_GET['tabuada'] . "x $contador =   $resultado <br>";}

?>
