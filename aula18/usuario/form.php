
<?php require_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1> cadastro de usuario</h1>
    <form action="<?php echo isset($usuario) ? 'atualizar.php': "inserir.php"?>" method="post" enctype ="multipart/form-data">
        <label for="nome"class="form-label">Nome </label><br>
        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $usuario['nome'] ??"";?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $usuario['idusuario'] ??"";?>"><br>
        <label for="login" class="form-label">Login</label><br>
        <input class="form-control" type="text" name="login" id="login" value="<?php echo $usuario['login'] ??"";?>"> <br>
        <label for="senha" class="form-label">Senha</label><br>
        <input  class="form-control" type="password" name="senha" id="senha" value="<?php echo $usuario['senha'] ??"";?>"><br>
        <label for="foto"class="form-label">foto </label><br>
        <input class="form-control"  type="file" name="foto" id="foto" value="<?php echo $usuario['foto']??"";?>"><br><br>

        <br>
        <button type="submit" class="btn btn-dark">cadastrar</button><br>

        <?php require_once "../template/rodape.php"; ?>
</form>
</div>