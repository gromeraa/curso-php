<?php

enum TipoConta {
    case Corrente;
    case Poupanca;
    case Universitaria;
    case Investimento;

    public function possuiTaxaDeSaque(): bool {
        return match($this) {
            TipoConta::Corrente,TipoConta::Poupanca => true,
            TipoConta::Universitaria, TipoConta::Investimento => false,
        };
    }

}