<?php
    $aluno1 = [
        "nome" => "Poliana",
        "nota1" => 7,
        "nota2" => 9
        ];

    $aluno2 = [
        "nome" => "Murilo",
        "nota1" => 8,
        "nota2" => 6
        ];

    $aluno3 = array (
        "nome" => "André",
        "nota1" => 6,
        "nota2" => 7
    );
$dados = [$aluno1, $aluno2, $aluno3];


    foreach ($dados as $key => $value){
    echo $value["nome"];
    echo $value["nota1"];
    echo $value["nota2"];
    }
  