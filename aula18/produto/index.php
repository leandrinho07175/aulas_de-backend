<?php require_once "consultar_todos.php"; ?>

<?php require_once "../template/cabecalho.php"; ?>


  <div class="container">
    <h1>Produtos</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir produtos</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Fotos</th>
      <th scope="col">Açoes</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($produtos as $produto){ ?>
    <tr>
      <th scope="row"><?php echo $produto['nome'];?></th>
      <td><?php echo $produto['preco'];?></td>
      <td><?php echo $produto['foto'];?></td>
      <td>
        <a href="excluir.php?id=<?php echo $produto['idproduto'];?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
        <a href="form.php?id=<?php echo $produto['idproduto'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> atualizar</a>
      </td>
    </tr> 
     <?php } ?>

  
  </tbody>
</table>


<?php require_once "../template/rodape.php"; ?>
