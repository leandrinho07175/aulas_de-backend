<?php

require_once "../conexao.php";

if (isset($_POST["codigo"], $_POST["descricao"], $_POST["peso"], $_POST["quantidade"], $_POST["valor"])) {


//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$id = $_POST['id'];
$codigo = $_POST["codigo"];
$descricao = $_POST["descricao"];
$peso = $_POST["peso"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$foto =  $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "UPDATE usuario SET 
`codigo`= ?, `descricao`= ?, `peso`= ?, `quantidade`= ?, `valor`= ?
    WHERE  `idproduto`= ? ";
    

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssdsii", $nome, $login, $senha, $foto, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
