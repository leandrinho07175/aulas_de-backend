<?php require_once "../produto/consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1>Produtos</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">
            Inserir produto
        </a>
    </div>

    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">codigo</th>
                <th scope="col">descricao</th>
                <th scope="col">peso</th>
                <th scope="col">quantidade</th>
                <th scope="col">valor</th>
                <th scope="col" width="25%">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($produtos as $produto){ ?>
            <tr>
                <td scope="row"><?php echo $produto['codigo']; ?></td>
                <td><?php echo $produto['descricao']; ?></td>
                <td><?php echo $produto['peso']; ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
                <td><?php echo $produto['valor']; ?></td>
                <td class="text-end">
                    <a href="excluir.php?id=<?php echo $produto['codigo']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</a>
                    <a href="form.php?id=<?php echo $produto['codigo']; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>

<?php require_once "../template/rodape.php"; ?>
