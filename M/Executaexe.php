<?php

// Incluindo a classe Produto
require_once "Exe1.php";

// Incluindo o arquivo com a função
require_once "Exe3.php";

// Instanciando os objetos (poderia estar em outro arquivo também)
$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = 2.50;
$produto1->quantidade = 10;

$produto2 = new Produto();
$produto2->nome = "Lápis";
$produto2->preco = 1.00;
$produto2->quantidade = 25;

// Chamando os métodos e a função
$produto1->exibirInformacoes();
$produto2->exibirInformacoes();
mostrarMediaPrecos($produto1, $produto2);

?>