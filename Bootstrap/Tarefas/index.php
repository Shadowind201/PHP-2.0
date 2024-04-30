<?php include "cabecalho.php" ?>

    <h1>📌 Tarefas</h1>
    <a href="novo-formulario.php" class="btn btn-primary">Adicionar Tarefa</a>

    <table class="table">
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Título</th>
            <th>descrição</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        include "conexao.php";
        $sql = "select * from tarefas order by status asc, id desc";
        $resultado = mysqli_query($conexao, $sql);

        while($umaTarefa = mysqli_fetch_assoc($resultado)){
        ?>    

        <tr>
            <td>
                <?php
                if($umaTarefa['status'] == 0){
                ?>
                <a href='editar-salvar.php?id=<?=$umaTarefa['id']?>' class="btn">✅</a>
                <?php
                }
                ?>
            </td>
            <td><?=$umaTarefa['id'];?></td>
            <td><?=$umaTarefa['titulo'];?></td>
            <td><?=$umaTarefa['descricao'];?></td>
            <td>
                <?php
                if($umaTarefa['status'] == 1){
                    echo "Completo";
                }else{
                    echo "Pentente";
                }
                ?>
            </td>
            <td>
                <a href="excluir.php?id=<?=$umaTarefa['id']?>" class="btn" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">❌</a>
            </td>
        </tr>

        <?php } ?>
    </table>

<?php include "rodape.php" ?>


    
    
