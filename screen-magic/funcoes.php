<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "O filme é um lançamento.\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "O filme ainda é novo, mas não é um lançamento.\n";
    } else {
    echo "O filme é antigo.\n";
}
}

function incluidoNoPlano (bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

