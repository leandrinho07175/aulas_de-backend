<?php include_once "../template/cabecalho.php"; ?>
<div class="container">
    <h1>Cadastre o Produto</h1>
    <hr>
    <form action="verifica_login.php" method="post">

    <label class="form-label">Produto</label>
    <input type="text" name="usuario" class="form-control">

    <label class="form-label">Código</label>
    <input type="password" name="senha" class="form-control">

    <label class="form-label">Descrição</label>
    <input type="text" name="usuario" class="form-control">

    <label class="form-label">Peso</label>
    <input type="text" name="usuario" class="form-control">

    <label class="form-label">Quantidade</label>
    <input type="text" name="usuario" class="form-control">

    <label class="form-label">Valor</label>
    <input type="teste" name="usuario" class="form-control">


    <button type="submit" class="btn btn-primary">Entrar</button>

    </form>
</div>
<?php include_once "../template/rodape.php"; ?>

