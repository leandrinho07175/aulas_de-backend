<?php

require_once "../conexao.php";

if (isset($_POST["valor"])) {

 
    $codigo = $_POST["codigo"];
    $descricao = $_POST["descricao"];
    $peso = $_POST["peso"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];
    
    // Verificando se a variável $nome_arquivo está definida
    $nome_arquivo = isset($_POST["produtos"]) ? $_POST["codigo"] : "";

    // String com o comando SQL para ser executado no DB
    $sql = "UPDATE produtos SET  `descricao` = ?, `peso` = ?, `quantidade` = ?, `valor` = ?   WHERE `codigo` = ?";

    // Prepara o SQL para ser executado no banco de dados
    $comando = $conexao->prepare($sql);

 
    // Adiciona os valores nos parâmetros
    $comando->bind_param("ssssi", $descricao, $peso, $quantidade, $valor, $codigo);

    // Executa o SQL - Comando no Banco de Dados
    if (!$comando->execute()) {
        die('Erro ao executar a consulta: ' . $comando->error);
    }

    // Fechar o comando após a execução
    $comando->close();
}

// Redireciona para o arquivo index.php após a atualização
header("Location: index.php");

