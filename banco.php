<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$endereIgorLane = new Endereco('Brasilia','Del Lago','DF - 250','1,1,2');
$lane = new ContaPoupanca(new Titular(new CPF('037.473.443-72'),'Lane Araujo Nunes', $endereIgorLane));
$igor = new ContaCorrente(new Titular(new CPF('237.551.326-64'),'Igor Gomes Araujo', $endereIgorLane));
$igor->deposita(10000);
$igor->transfere(100,$lane);


$lane->deposita(15200);
$lane->saca(100);

// Mostra dados: nome, cpf, saldo
echo "Nome do Titular da Conta: " . $lane->recuperaNomeTitular(). PHP_EOL;
echo "CPF: " . $lane->recuperaCpfTitular(). PHP_EOL;
echo "Saldo: " . $lane->recuperaSaldo(). PHP_EOL;


// Run -> para rodar comando do nosso banco