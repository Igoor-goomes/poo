<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa (): float
    {
        // passando o valor da taxa para contas do tipo Conta Corrente
        return 0.03;
    }
}