<?php

namespace Alura\Banco\Modelo;
class CPF
{
    private string $nr_cpf;

    public function __construct(string $nr_cpf)
    {
        $nr_cpf = filter_var($nr_cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($nr_cpf === false) {
            echo "CPF inválido, por favor verifique";
            exit();
        }

        $this->nr_cpf = $nr_cpf;
    }

    public function recuperaNr_cpf(): string
    {
        return $this->nr_cpf;
    }

}