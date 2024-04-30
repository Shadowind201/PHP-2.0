<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
      $produtosCafe = [
        [
          'nome' => "Café Cremoso",
          'descricao' => "Café cremoso irresistivelmente suave e que envolve seu paladar",
          'preco' => "5.00",
          'imagem' => "img/cafe-cremoso.jpg",
          "classificacao" => "3"
        ],
        [
          'nome' => "Café com Leite",
          'descricao' => "A harmonia do café e do leite, uma experiência reconfortante",
          'preco' => "2.00",
          'imagem' => "img/cafe-com-leite.jpg",
          "classificacao" => "5"
        ],
        [
          "nome" => "Cappuccino",
          "descricao" => "Café suave, leite cremoso e uma pitada de sabor adocicado",
          "preco" => "7.00",
          "imagem"=> "img/cappuccino.jpg",
          "classificacao" => "4"
        ],
        [
          "nome" => "Café Gelado",
          "descricao" => "Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.",
          "preco" => "3.00",
          "imagem"=> "img/cafe-gelado.jpg",
          "classificacao" => "1"
        ]
      ];
        
      $produtosAlmoco = [
        [
          "nome" => "Bife",
          "descricao" => "Bife, arroz com feijão e uma deliciosa batata frita",
          "preco" => "27.90",
          "imagem" => "img/bife.jpg",
          "classificacao" => "1"
        ],
        [
          "nome" => "Filé de peixe",
          "descricao" => "Filé de peixe salmão assado, arroz, feijão verde e tomate.",
          "preco" => "24.99",
          "imagem" => "img/prato-peixe.jpg",
          "classificacao" => "5"
        ],
        [
          "nome" => "Frango",
          "descricao" => "Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante",
          "preco" => "23.00",
          "imagem" => "img/prato-frango.jpg",
          "classificacao" => "4"
        ],
        [
          "nome" => "Fettuccine",
          "descricao" => "Prato italiano autêntico da massa do fettuccine com peito de frango grelhado",
          "preco" => "22.50",
          "imagem" => "img/fettuccine.jpg",
          "classificacao" => "2"
        ]
      ];
      ?>

      <div class="container-cafe-manha-produtos">
        <?php foreach ($produtosCafe as $cafe): ?>
        <div class="container-produto">
          <div class="container-foto">
            <img src="<?= $cafe['imagem']; ?>">
          </div>
          <p><?= $cafe['nome']; ?></p>
          <p><?= $cafe['descricao']; ?></p>
          <p><?= "R$ " . $cafe['preco']; ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="container-almoco-produtos">
        <?php foreach ($produtosAlmoco as $cafe): ?>
        <div class="container-produto">
          <div class="container-foto">
            <img src="<?= $cafe['imagem']; ?>">
          </div>
          <p><?= $cafe['nome']; ?></p>
          <p><?= $cafe['descricao']; ?></p>
          <p><?= "R$ " . $cafe['preco']; ?></p>
        </div>
        <?php endforeach; ?>
      </div> 
</body>
</html>
