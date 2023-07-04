<?php

require_once "../conexao.php";

if (isset($_POST["codigo"], $_POST["descricao"], $_POST["peso"], $_POST["quantidade"], $_POST["valor"])) {

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$nome =  $_POST["peso"];
$login = $_POST["descricao"];
$nome =  $_POST["quantidade"];
$nome =  $_POST["valor"];
$senha = password_hash($_POST["codigo"], PASSWORD_DEFAULT);
$foto =  $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `usuario`(`codigo`, `descricao`, `peso`, `quantidade`,`valor`,) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sssss", $codigo, $descricao, $peso, $quantidade, $valor);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");


