<?php include("cabecalho.php")?>
<?php include("menu.php")?>

        <main class="bg-light row pe-3 ps-3">
            <div class="row">
                <h2 class="mt-4 h1">A melhor pizza da região</h2>
                <hr>

                <?php 
                $servidor = "localhost";
                $usuario = "root"; // "root"
                $senha = ""; // ""
                $bd = "bd_pizza_novo";

                $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

                $sql = "select * from pizzas_novo order by q desc limit 3";

                $todasAsPizzas = mysqli_query($conexao, $sql);
                while($umaPizza = mysqli_fetch_assoc($todasAsPizzas)){

                ?>

                <div class="col text-center">
                    <img src="<?php echo $umaPizza["foto"]?>" alt="<?php echo $umaPizza["nome"];?>" class="img-fluid">
                    <p><?php echo $umaPizza["nome"];?></p>
                    <?php 
                    $estrelas = $umaPizza["classificacao"];
                    // com FOR
                    for ($i=0; $i < $estrelas ; $i++) {
                        echo "⭐";
                    }
                    
                    //ou com WHILE
                    /*$i = 0;
                    while($i<$estrelas){
                        echo "⭐";
                        $i++;
                    }*/
                    ?>
                </div>

                <?php
                }
                mysqli_close($conexao);
                ?>

                <hr>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Nossos sabores</h3>
                    <p class="sabores"> À Moda da Casa  <br>
                       <?php 

                       // conexão
                       $conexao = mysqli_connect($servidor, $usuario, $senha, $bd,);

                       // criar o sql
                       $sql = "select nome from pizzas_novo";

                       //executar sql no banco
                       $todasAsPizzas = mysqli_query($conexao, $sql);
                       
                       // laço de repetição - mostrar cada um dos dados, linha a linha
                       while($umaPizza = mysqli_fetch_assoc($todasAsPizzas)){
                            echo $umaPizza["nome"] . "<br>";
                       }

                       ?>
                    </p>
                </div><!-- coluna -->
                <div class="col">
                    <h3>Uma casa com história</h3>
                    <div class="row">
                        <div class="col-4">
                            <img src="historia.png" class="img-fluid" alt="historia">
                        </div>
                        <div class="col">
                            <p>Muito famosa em toda a região por sua excelência na qualidade, a nossa pizzzaria tem mais de 25 anos de história.</p>
                            <p>
                                <a href="quem-somos.php" class="link-destaque">Conheça</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- linha -->
        </main>

<?php include("rodape.php")?>