<?php


function ordenaLista(array $lista): array {
    sort($lista);
    return $lista;

}

$string = ["batata", "carne", "arroz", "feijão", "picanha", "costela", "frango", "macarrão", "salsicha", "linguiça", "peixe", "ovo", "leite", "queijo", "iogurte"];

ordenaLista($string);

sort($string);
var_dump($string);