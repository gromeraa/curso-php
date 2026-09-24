<?php 

echo "Bem-vindo ao screen magic!\n";

$nomeFilme = "Top Gun: Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Star Wars";

$anoLancamento = 2022;

$qntdNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}

//$exemploContador =1;
//while ($argv[$exemploContador] != 0) {
//    $somaDeNotas += $argv[$exemploContador++];
//}

$notaFilme = $somaDeNotas / $qntdNotas;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

//echo "$anoLancamento";
echo $notaFilme."\n";

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
    default => "Gênero desconhecido",
};

//echo "O filme $nomeFilme é do gênero $genero.\n";

echo $argc;