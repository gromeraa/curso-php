<?php 

echo "Bem-vindo ao screen magic!
";

$nomeFilme = "Se beber não case";
$nomeFilme = "Star Wars";
$nomeFilme = "Top Gun: Maverick";
$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 8.8;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

//echo "$anoLancamento";

if ($anoLancamento > 2022) {
    echo "O filme é um lançamento.\n";
} elseif ($anoLancamento > 2020 &&  $anoLancamento <= 2022) {
    echo "O filme ainda é novo, mas não é um lançamento.\n";
} else {
    echo "O filme é antigo.\n";
}

$genero = match ($nomeFilme) {
    "Top Gun: Maverick" => "Ação",
    "Star Wars" => "Ficção Científica",
    "Se beber não case" => "Comédia",
};

echo "O filme $nomeFilme é do gênero $genero.\n";