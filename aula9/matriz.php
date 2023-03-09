<h2>Matriz</h2>


<?php

$produto1 = [
    "nome" => "notebook",
   "marca" => "dell",
   "preco" => 5000 
];

$produtos2 = [
    "nome" => "camera",
   "marca" => "nikon",
   "preco" => 3000 
];

$produtos3 = [
    "nome" => "smatphone",
   "marca" => "LG",
   "preco" => 1200 
];

$tabela = [$produto1, $produtos2, $produtos3];

var_dump($tabela);
echo $tabela[1]["marca"];

//json - Javascript Objet Notation
echo "<br><br><br><br>";
echo json_encode($tabela);



?>