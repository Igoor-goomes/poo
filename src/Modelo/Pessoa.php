<?php

namespace Alura\Banco\Modelo;
class Pessoa
{
    use AcessoPropriedades;
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNr_cpf();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 11) {
            echo "Para criação da conta, precisa informa um nome válido, com no minimo 11 caracteres.";
            exit();
        }
    }



}