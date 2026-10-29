<?php

require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo ao screen magic!\n";

$filme = new Filme(
    "Star Wars: O Império Contra-Ataca",
    1980,
    Genero::FicçãoCientífica,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);
echo $filme->media()."\n";

echo $filme->anoLancamento . "\n";