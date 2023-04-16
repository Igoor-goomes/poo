<?php

namespace Alura\Banco\Modelo\Funcionario;

class AnalistaDeSistema extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->aumentoSalario($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500;
    }
}