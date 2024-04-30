    <?php

    $livros = [
      ["titulo" => "Aprendendo PHP", "autor" => "João da Silva", "preco" => "99.99"],
      ["titulo" => "HTML básico", "autor" => "Maria dos Santos", "preco" => "59.90"],
    ];

    ?>

<ul>
    <?php foreach ($livros as $livro) { ?> 
        <li>
          <h3><?php echo $livro['titulo']; ?></h3>
          <p>Autor: <?php echo  $livro['autor']; ?></p>
          <p>Preço: <?php echo "R$ " . $livro['preco']; ?></p>
        </li>
    <?php } ?> 
</ul>


<?php
/* $livros = [
  ["titulo" => "Aprendendo PHP", "autor" => "João da Silva", "preco" => "99.99"],
  ["titulo" => "HTML básico", "autor" => "Maria dos Santos", "preco" => "59.90"]
];
?>
<ul>
	<?phpforeach ($livrosas $livro) { ?>
      <li>
          <h3><?php $livro['titulo'] ?></h3>
          <p>Autor: <?php  $livro['autor'] ?></p>
          <p>Preço: <?php  "R$ " . $livro['preco'] ?></p>
      </li>
  <?php } 
</ul> */ ?>