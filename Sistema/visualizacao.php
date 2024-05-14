<?php include "cabecalho.php" ?>

<div class="container">

    <h1>Lista de Compras</h1>
    <br>
    <a href="form-inserir.php" class="btn btn-success">Adicionar Novo Produto</a>
    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Nota</th>
                <th>Editar</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php
                include "conexao.php";
                $sql = "select * from tb_lista order by status asc, id desc";
                $resultado = mysqli_query($conexao, $sql);

                while($umProduto = mysqli_fetch_assoc($resultado)){
                ?>

                
                <td><?=$umProduto['nome']?></td>
                <td><?=$umProduto['quantidade']?></td>
                <td><?=$umProduto['nota']?></td>


                <td>
                    <a class="btn btn-primary" href="form-alterar.php?id=<?=$umProduto['id']?>">Editar</a>
                </td>

                <td>
                <?php
                    if($umProduto['status'] == 1){
                        echo "<strong>Comprado</strong>";
                    }else{
                        echo "Corfirmar Compra";
                        ?>
                        <a href='status.php?id=<?=$umProduto['id']?>' class="btn">✅</a>
                        <?php   
                    }
                ?>
                </td>

            </tr>
        </tbody>
        <?php } ?>
    </table>

</div>

<?php include "rodape.php" ?>