<?php

 require_once "../conexao.php";

 if(isset($_POST["nome"]) && isset($_POST["descricao"])&& isset($_POST["preco"])) {
 $id=$_POST["id"];
 $nome =$_POST["nome"];
 $descricao =$_POST["descricao"];
 $preco =$_POST["preco"];

//String com o comando SQL para ser executado no DB
 $sql = "UPDATE produto SET `nome`=?, `descricao`=?, `preco`=0, `foto`=? WHERE  `idproduto`=? ";
echo $sql;

 //Prepara o SQL para ser executado no banco de dados
 $comando = $conexao->prepare($sql);

  // adicionar os valores nos parâmetros
 $comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto, $id);

 //executa o SQL - Comando no Banco de dados
 $comando->execute();

        }
 //abre o arquivo form.php
 header("Location: index.php");
 
        