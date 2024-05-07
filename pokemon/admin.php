<?php include "cabecalho.php"; ?>

    <h2>Ambiente Adiministrativo</h2>
    <a href="form-inserir.php" class="btn btn-primary">Novo Pokemon</a>

    <?php include "conexao.php" ?>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Número</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from tb_pokemon";
            $resultado = mysqli_query($conexao,$sql);
            while($umPokemon = mysqli_fetch_assoc($resultado)):
            ?>
                <tr>
                    <td><?=$umPokemon['id'];?></td>
                    <td><?=$umPokemon['nome'];?></td>
                    <td><?=$umPokemon['tipo'];?></td>
                    <td>
                        <a href="form-alterar.php?id=<?=$umPokemon['id'];?>">Editar</a>
                        <a href="excluir.php?id=<?=$umPokemon['id'];?>">Excluir</a>
                        <a href="visualizar.php?id=<?=$umPokemon['id'];?>">Ver</a>
                    </td>
                </tr>
                <?php
                endwhile; 
                mysqli_close($conexao);
                ?>
        </tbody>
    </table>

<?php include "rodape.php"; ?>