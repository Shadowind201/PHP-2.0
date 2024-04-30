http://localhost/aula_php/PHP/Bootstrap/Card_Game/index.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Card Game</h1>
        <div class="row">
            <?php
                $arquivo = fopen("dados.csv", "r");
                while(!feof($arquivo)):
                    $linha = fgets($arquivo, 1000);
                    if($linha != ""):
                        $dados = explode(";",$linha);
                        ?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $dados[2] ?>" class="card-img-top" alt="<?php echo $dados[0] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dados[0] ?></h5>
                            <p class="card-text"><?php echo $dados[1] ?></p>
                        </div>
                    </div>
                </div>
                        <?php
                    endif;   
                endwhile;
            ?>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>