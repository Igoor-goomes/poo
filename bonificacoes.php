<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;

$colaboradorUm = new Funcionario('Roberio Teles de Sá', new CPF('821.832.433-09'), 'Gerente de Projetos',3000);

$colaboradorDois = new Funcionario('William Vieira de Brito', new CPF('161.873.785-63'), 'Analista de Sistemas Jr',1000);

$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacao($colaboradorUm);
$controlador->adicionaBonificacao($colaboradorDois);

echo $controlador->recuperaTotal();


