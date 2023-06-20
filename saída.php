<?php

//Alternativa 1 de escrever no console
print 'Hello World' . PHP_EOL;

//Alternativa 2 de escrever no console
$stdout = fopen('php://stdout', 'w');
fwrite($stdout, 'Hello World' . PHP_EOL);

//Alternativa 3 de escrever no console
fwrite(STDOUT, 'Hello World' . PHP_EOL);

//Alternativa 1 para escrever no console, porém na saída de erro
$stdout = fopen('php://stderr', 'w');
fwrite($stdout, 'Hello World' . PHP_EOL);

//Alternativa 2 para escrever no console, porém na saída de erro
fwrite(STDERR, 'Hello World' . PHP_EOL);

//Copiando um stream de entrada para um stream de saída
$frutas = fopen('zip://compacto.zip#frutas1.txt', 'r');
stream_copy_to_stream($frutas, STDOUT);