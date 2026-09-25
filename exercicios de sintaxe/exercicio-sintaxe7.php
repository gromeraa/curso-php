<?php 

function calculoIMC (float $peso, float $altura): float {
    return $peso  / ($altura * $altura);
}

echo calculoIMC(70, 1.75);