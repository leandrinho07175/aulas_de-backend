<?php

 require_once "../conexao.php";

//verifica se foi enviado o param id pela url
 if(isset($_GET['id']))
 {

 //pega o valor do id que foi enviado pela url
 $id = $_GET['id'];

//String com o comando SQL para ser executado no DB
 $sql = "DELETE FROM `produto` WHERE  `idproduto`= ? ;";
echo $sql;

 //Prepara o SQL para ser executado no banco de dados
 $comando = $conexao->prepare($sql);

  // adicionar os valores nos parâmetros
 $comando->bind_param("i", $id);

 //executa o SQL - Comando no Banco de dados
 $comando->execute();

 }

 //abre o arquivo form.php
 header("Location: produtos.php");

 