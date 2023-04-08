<?php

class Titular
{
    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    /**
     * @return string
     */
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNr_cpf();
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 11) {
            echo "Para criação da conta, precisa informa um nome válido, com no minimo 11 caracteres.";
            exit();
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }


}