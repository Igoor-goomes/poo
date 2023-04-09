<?php

spl_autoload_register(function (string $classes){
    // Alterando o caminho das classes para recever o autoload
    $diretorio = str_replace('Alura\\Banco','src', $classes);
    $diretorio = str_replace('\\',DIRECTORY_SEPARATOR, $diretorio);
    $diretorio .= '.php';

    // Validando se o arquivo existe
    if (file_exists($diretorio)) {
        require_once $diretorio;
    }
});