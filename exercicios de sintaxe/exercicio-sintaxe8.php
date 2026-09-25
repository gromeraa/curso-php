<?php 

function calculoGrau (float $celsius, float $fahrenheit): float {
    return ($celsius * 1.8) + 32;
}

echo calculoGrau(25, 77);