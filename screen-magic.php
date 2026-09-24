<?php 

echo "Bem-vindo ao screen magic!
";

$nomeFilme = "Top Gun: Maverick";
$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 8.8;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

//echo "$anoLancamento";

if ($anoLancamento > 2022) {
    echo "O filme é um lançamento.";
} elseif ($anoLancamento > 2020 &&  $anoLancamento <= 2022) {
    echo "O filme ainda é novo, mas não é um lançamento.";
} else {
    echo "O filme é antigo.";
}