<?php

//Lendo entrada do console e guardando em um arquivo
$stdin = fopen('php://stdin', 'r');
$entrada = trim(fgets($stdin));
file_put_contents('frutas1.txt', PHP_EOL . $entrada, FILE_APPEND);

//Utilização da constante STDIN
$entrada = trim(fgets(STDIN));
file_put_contents('frutas1.txt', PHP_EOL . $entrada, FILE_APPEND);