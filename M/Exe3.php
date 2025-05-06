<?php

//incluindo a classe Produto necessário para o (type hinting)
require_once "Exe1.php";

function mostrarMediaPrecos(Produto $produto1, Produto $produto2) {
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "A média dos preços dos produtos é: " . $media . "\n";
}

?>