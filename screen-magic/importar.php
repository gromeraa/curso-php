<?php

$caminhoArquivo = __DIR__ . "/filme.json";
echo "Caminho do arquivo: $caminhoArquivo\n\n";

$conteudoArquivo = file_get_contents($caminhoArquivo);
echo "Conteúdo do arquivo: $conteudoArquivo\n\n";

$filme = json_decode($conteudoArquivo, true);
var_dump($filme);