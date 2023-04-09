<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';

$endereIgorLane = new Endereco('Brasilia','Del Lago','DF - 250','1,1,2');
$igor = new Conta(new Titular(new CPF('237.551.326-64'),'Igor Gomes Araujo', $endereIgorLane));
$igor->deposita(4900);


$lane = new Conta(new Titular(new CPF('037.473.443-72'),'Lane Araujo Nunes', $endereIgorLane));


// Mostra dados: nome, cpf, saldo
echo "Nome do Titular da Conta: " . $lane->recuperaNomeTitular(). PHP_EOL;
echo "CPF: " . $lane->recuperaCpfTitular(). PHP_EOL;
echo "Saldo: " . $lane->recuperaSaldo(). PHP_EOL;


// Run -> para rodar comando do nosso banco