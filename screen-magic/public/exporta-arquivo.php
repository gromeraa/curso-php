<?php

//var_dump($_POST);

$filme = [
    "nome" => $_POST["nome"],
    "anoLancamento" => $_POST["ano"],
    "genero" => $_POST["genero"],
    "nota" => $_POST["nota"]
];

file_put_contents(__DIR__ . "/filme.json", json_encode($filme));