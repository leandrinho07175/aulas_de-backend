<?php
    $aluno1 = [
        "nome" => "Poliana Silveira",
        "nota1" => 7,
        "nota2" => 9
        ];

    $aluno2 = [
        "nome" => "Murilo Alexandro",
        "nota1" => 8,
        "nota2" => 6
        ];

    $aluno3 = array (
        "nome" => "André Felipe",
        "nota1" => 6,
        "nota2" => 7
    );

    $aluno4 = array (
        "nome" => "Lavinia Sandy",
        "nota1" => 6,
        "nota2" => 7
    );
$dados = [$aluno1, $aluno2, $aluno3, $aluno4];

//print_r($dados);
echo json_encode($dados);

?>