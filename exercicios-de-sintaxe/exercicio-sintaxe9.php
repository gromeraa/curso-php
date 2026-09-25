<?php

$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

var_dump($notas);
rsort($notas);
var_dump($notas);

echo "As 3 maiores notas são: $notas[0], $notas[1], $notas[2]\n";