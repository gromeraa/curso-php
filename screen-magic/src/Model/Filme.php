<?php

class Filme {
    public string $nome ;
    public int $anoLancamento;
    public string $genero;
    public float $media;
    public array $notas = [];

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

}