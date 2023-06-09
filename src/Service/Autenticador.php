<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar(($senha))) {
            echo "Ok, usuário logado no sistema com sucesso!";
        } else {
            echo "Senha incorreta, tente novamente! ";
        }
    }
}