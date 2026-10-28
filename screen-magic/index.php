<?php

require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo ao screen magic!\n";

$filme = new Filme();
$filme->nome = "Clone Wars";
$filme->anoLancamento = 2008;
$filme->genero = "Animação";

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);
echo $filme->media()."\n";