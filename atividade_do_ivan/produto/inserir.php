<?php

require_once "../conexao.php";

if (isset($_POST["codigo"]) && isset($_POST["descricao"]) && isset($_POST["peso"]) && isset($_POST["quantidade"]) && isset($_POST["valor"])) {
    $codigo = $_POST["codigo"];
    $descricao = $_POST["descricao"];
    $peso = $_POST["peso"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];

    // String com o comando SQL para ser executado no DB
    $sql = "INSERT INTO `produtos`(`codigo`, `descricao`, `peso`, `quantidade`, `valor`) 
            VALUES (?, ?, ?, ?, ?);";

    // Prepara o SQL para ser executado no banco de dados
    $comando = $conexao->prepare($sql);

    // Verifica se a preparação do SQL ocorreu com sucesso
    if (!$comando) {
        die('Erro ao preparar a consulta: ' . $conexao->error);
    }

    // Adiciona os valores nos parâmetros
    if (!$comando->bind_param("ssdds", $codigo, $descricao, $peso, $quantidade, $valor)) {
        die('Erro ao vincular os parâmetros: ' . $comando->error);
    }

    // Executa o SQL - Comando no Banco de Dados
    if (!$comando->execute()) {
        die('Erro ao executar a consulta: ' . $comando->error);
    }

    // Fechar o comando após a execução
    $comando->close();
}

// Abre o arquivo form.php
header("Location: index.php");
