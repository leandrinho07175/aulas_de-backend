<?php require_once "consultar_todos.php"; ?>

<?php require_once "../template/cabecalho.php"; ?>

  <div class="container">
    <h1>usuario</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir usuarios</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">login</th>
      <th scope="col">Fotos</th>
      <th scope="col">Açoes</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($usuarios as $usuario){ ?>
    <tr>
      <th scope="row"><?php echo $usuario['nome'];?></th>
      <td><?php echo $usuario['login'];?></td>
      <td><?php echo $usuario['foto'];?></td>
      <td>
        <a href="excluir.php?id=<?php echo $usuario['idusuario'];?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
        <a href="form.php?id=<?php echo $usuario['idusuario'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> atualizar</a>
      </td>
    </tr> 
     <?php } ?>

  
  </tbody>
</table>

<?php require_once "../template/rodape.php"; ?>

  