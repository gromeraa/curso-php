<?php 

echo "Bem-vindo ao screen magic!
";

$nomeFilme = "Top Gun: Maverick";
$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 8.8;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "$anoLancamento";