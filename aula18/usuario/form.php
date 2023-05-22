<?php
require_once "consulta_por_id.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hellow word</p>
    <h1>Cadastro de Usuario</h1>
    <hr>
    <form action="<?php echo isset($usuario) ? 'atualizar.php': "inserir.php"?>" method="post" enctype ="multipart/form-data">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $usuario['nome'] ??"";?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $usuario['idusuario'] ??"";?>"><br>
        <label for="login">Login</label><br>
        <input type="text" name="login" id="login" value="<?php echo $usuario['login'] ??"";?>"> <br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha" value="<?php echo $usuario['senha'] ??"";?>"><br>
        <label for="foto">foto</label><br>
        <input type="file" name="foto" id="foto" value="<?php echo $usuario['foto']??"";?>"><br><br>
        <button type="submit">cadastrar</button><br>

    </form>
    
</body>
</html>