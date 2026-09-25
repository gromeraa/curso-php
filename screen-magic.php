<?php 

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "O filme é um lançamento.\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "O filme ainda é novo, mas não é um lançamento.\n";
    } else {
    echo "O filme é antigo.\n";
}
}

function incluidoNoPlano (bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}


echo "Bem-vindo ao screen magic!\n";

$nomeFilme = "Top Gun: Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Star Wars";

$anoLancamento = 2022;

$qntdNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

//$exemploContador =1;
//while ($argv[$exemploContador] != 0) {
//    $somaDeNotas += $argv[$exemploContador++];
//}

$notaFilme = array_sum($notas) / $qntdNotas;
$planoPrime = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

//echo "$anoLancamento";
echo $notaFilme."\n";

//exibeMensagemLancamento($anoLancamento);
exibeMensagemLancamento(2026);

$genero = match ($nomeFilme) {
    "Top Gun: Maverick" => "Ação",
    "Star Wars" => "Ficção Científica",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido",
};

//echo "O filme $nomeFilme é do gênero $genero.\n";

$filmeArray = [
    "nome" => "Top Gun: Maverick",
    "anoLancamento" => 2022,
    "genero" => "Ação",
    "nota" => 8.5,
];

var_dump($notas);
sort($notas);
var_dump($notas);
min($notas);
echo "A menor nota é: ".min($notas)."\n";

max($notas);
echo "A maior nota é: ".max($notas)."\n";

var_dump($filmeArray["nome"]);
$posicaoDoisPontos = strpos($filmeArray["nome"], ":");
var_dump($posicaoDoisPontos);

var_dump(substr($filmeArray["nome"], 0, $posicaoDoisPontos));