<?php require_once "../produto/consultar_por_id.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

    <h1>Cadastro de Produto</h1>
    <hr>

    <form 
    action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="codigo">codigo</label><br>
       <input type="text" name="codigo" id="codigo" value="<?php echo $produto['codigo'] ?? ""; ?>"><br>
       <input type="hidden" name="id" id="id" value="<?php echo $produto['idproduto'] ?? ""; ?>"><br>

       <label for="descricao">Descrição</label><br>
       <textarea  name="descricao" id="descricao"><?php echo $produto['descricao'] ?? ""; ?></textarea><br>

       <label for="peso">Peso</label><br>
       <input type="number" step="0.01" name="peso" id="peso" value="<?php echo $produto['peso'] ?? "0.00"; ?>"><br>

       <label for="quantidade">quantidade</label><br>
       <input type="number" step="0.01" name="quantidade" id="quantidade" value="<?php echo $produto['quantidade'] ?? "0.00"; ?>"><br>

       <label for="valor">valor</label><br>
       <input type="number" step="0.01" name="valor" id="valor" value="<?php echo $produto['valor'] ?? "0.00"; ?>"><br>

       
       <br>
       <button type="submit">Cadastrar Produtos</button>

    </form>

    <?php require_once "../template/rodape.php";  ?>