<?php

require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo ao screen magic!\n";

$titulo = new Titulo(
    "Star Wars: O Império Contra-Ataca",
    1980,
    Genero::FicçãoCientífica,
);

$titulo->avalia(10);
$titulo->avalia(10);
$titulo->avalia(5);
$titulo->avalia(5);

//var_dump($titulo);
//echo $tituto->media()."\n";
//echo $titulo->anoLancamento . "\n";

$filme = new Filme (
    "Star Wars: O Retorno de Jedi",
    1983,
    Genero::FicçãoCientífica,
    131,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);

//var_dump($filme);
//echo $filme->media()."\n";

$serie = new Serie (
    "Star Wars: The Mandalorian",
    2019,
    Genero::FicçãoCientífica,
    3,
    8,
    40,
);

$serie->avalia(5);
$serie->avalia(9);
$serie->avalia(8);
$serie->avalia(6);

var_dump($serie);