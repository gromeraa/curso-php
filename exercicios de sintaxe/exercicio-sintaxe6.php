<?php 

function recebeNumeros (int $n1, string $op, int $n2): float {
    return match ($op) {
        "soma" => $n1 + $n2,
        "subtração" => $n1 - $n2,
        "multiplicação" => $n1 * $n2,
        "divisão" => $n1 / $n2,
        default => "Operação inválida",
    };
}

echo recebeNumeros(10, "subtração", 5)."\n";