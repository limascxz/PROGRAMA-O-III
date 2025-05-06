<?php

//incluindo a classe Produto
require_once "Exe1.php";

//instanciando o primeiro objeto da classe Produto
$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = "R$2.50";
$produto1->quantidade = 10;

//instanciando o segundo objeto da classe Produto
$produto2 = new Produto();
$produto2->nome = "Lápis";
$produto2->preco = "R$1.00";
$produto2->quantidade = 25;

//chamando o metodo exibirInformacoes() para cada objeto
$produto1->exibirInformacoes();
$produto2->exibirInformacoes();

?>