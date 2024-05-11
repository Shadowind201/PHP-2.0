<?php include "cabecalho.php" ?>

<div class="container">

    <h1>Lista de Compras</h1>
    <br>
    <a href="form-inserir.php" class="btn btn-primary">Adicionar Novo Produto</a>
    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php
                include "conexao.php";
                $sql = "select * from tb_lista order by id";
                $resultado = mysqli_query($conexao, $sql);

                while($umProduto = mysqli_fetch_assoc($resultado)){
                ?>

                <td><?=$umProduto['nome']?></td>
                <td><?=$umProduto['quantidade']?></td>
                <td><?=$umProduto['nota']?></td>

                <td>
                    <a class="btn btn-primary" href="form-alterar.php?=<?=$umProduto['id']?>">Editar</a>
                </td>

            </tr>
        </tbody>
        <?php } ?>
    </table>

</div>

<?php include "rodape.php" ?>