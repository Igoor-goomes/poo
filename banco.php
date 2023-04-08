<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$igor = new Conta(new Titular(new CPF('237.551.326-64'),'Igor Gomes Araujo'));
$igor->deposita(4900);

$lane = new Conta(new Titular(new CPF('037.473.443-72'),'Lane Araujo Nunes'));


echo "Nome do Titular da Conta: " . $lane->recuperaNomeTitular(). PHP_EOL;
echo "CPF: " . $lane->recuperaCpfTitular(). PHP_EOL;
echo "Saldo: " . $lane->recuperaSaldo(). PHP_EOL;

// Run -> para rodar comando do nosso banco