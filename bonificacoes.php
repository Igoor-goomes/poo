<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\AnalistaDeSistema;
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;





$desenvolvedor = new AnalistaDeSistema('Igor Gomes de Brito', new CPF('701.851.881-41'), 4000);
$desenvolvedor->sobeDeNivel();

$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacao($desenvolvedor);

echo $controlador->recuperaTotal();


