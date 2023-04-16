<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome,$cpf);
//        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function aumentoSalario(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Para solicitação de aumento de salário, deve ser informado um valor maior que 0.";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;

}