<?php

class Titulo {
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        ) {
        $this->notas = [];
    }

    public function avalia(float $nota) : void 
    {
        $this->notas[] = $nota;
    }

    public function media() : float 
    {
        $somaNotas = array_sum($this->notas);
        $qntdNotas = count($this->notas);
        return $somaNotas / $qntdNotas;
    }

    public function duracaoEmMinutos() : int {
        return 0;
    }
}