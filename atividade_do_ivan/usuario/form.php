<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>

<div class="container">

    <h1>Cadastro de PRodutos</h1>
    <hr>

    <form 
    action="<?php echo isset($usuario) ?
     'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

    <label for="senha" class="form-label">codigo</label><br>
       <input class="form-control" type="text" name="senha" id="senha" 
       value="<?php echo $usuario['senha'] ?? ""; ?>"><br>

       <input type="hidden" name="id" id="id" 
       value="<?php echo $usuario['idusuario'] ?? ""; ?>"><br>

       <label for="login" class="form-label">Descrição</label><br>
       <input class="form-control" type="text"  name="login" id="login" 
       value="<?php echo $usuario['login'] ?? ""; ?>"><br>

       
       <label for="nome" class="form-label">peso</label><br>
       <input class="form-control" type="text" name="nome" id="nome" 
       value="<?php echo $usuario['nome'] ?? ""; ?>">

       <label for="senha" class="form-label">quantidade</label><br>
       <input class="form-control" type="text" name="senha" id="senha" 
       value="<?php echo $usuario['senha'] ?? ""; ?>"><br>

       <label for="foto" class="form-label">valor</label><br>
       <input class="form-control" type="text" name="foto" id="foto"><br>

       <br>
       <button type="submit" class="btn btn-dark">Cadastrar</button>

    </form>
</div>

    <?php require_once "../template/rodape.php";  ?>

