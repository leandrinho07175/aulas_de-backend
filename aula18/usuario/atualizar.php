<?php
 require_once "../conexao.php";
 if(isset($_POST["nome"])&& isset($_POST["login"])&& isset($_POST["senha"])){
require_once "salvar_foto.php";
 $id = $_POST["id"];
 $nome = $_POST["nome"];
 $descricao = $_POST["login"];
 $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT) ;
 $foto = $nome_arquivo;
 //string com o comendo sql para ser executoado no db
 $sql = "UPDATE usuario SET `nome`=?, `login`=?, `senha`=?, `foto`=? WHERE  `idusuario`=?;";
 //echo $sql;
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssssi", $nome, $login, $senha, $foto,$id);
 //executa o sql - comando no banco de dados
 $comando->execute();
 }
 //abre o arquivo form.php
 header("location: index.php");
