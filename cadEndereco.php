<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$novoHorizonte = new Endereco('Brasilia-DF','Regiao dos Lagos','Rodovia DF-250','1');

echo $novoHorizonte->bairro;