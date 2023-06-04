<?php

//Lendo arquivo 1
$arquivo = fopen('lista-cursos.txt', 'r');

while (!feof($arquivo)) {
    $linha = fgets($arquivo);
    echo $linha;
}
echo PHP_EOL . PHP_EOL;

fclose($arquivo);

//Lendo arquivo 2
$tamanhoArquivo = filesize('lista-cursos-e-formacoes-completos.txt');
echo $tamanhoArquivo . PHP_EOL;

$arquivo = fopen('lista-cursos-e-formacoes-completos.txt', 'r');
$lista = fread($arquivo, $tamanhoArquivo);
echo $lista . PHP_EOL . PHP_EOL;

fclose($arquivo);

//Lendo arquivo 3
$arquivo = file_get_contents('lista-linguagens.txt');
echo $arquivo . PHP_EOL . PHP_EOL;

//Armazenando linhas do arquivo em um array
$arquivo = file('lista-linguagens.txt');
foreach ($arquivo as $index => $value) {
    $arquivo[$index] = trim($value);
}
var_dump($arquivo);