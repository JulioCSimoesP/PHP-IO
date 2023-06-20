<?php

//Sobrescrevendo um arquivo 1
$arquivo = fopen('frutas1.txt', 'w');
$fruta = 'Banana';
fwrite($arquivo, $fruta);
fclose($arquivo);

//Sobrescrevendo um arquivo 2
$arquivo = fopen('frutas2.txt', 'w');
$fruta = 'Maçã: uma fruta suculenta';
fwrite($arquivo, $fruta, 6);
fclose($arquivo);

//Escrevendo no final do arquivo 1
$arquivo = fopen('frutas1.txt', 'a');
$fruta = PHP_EOL . 'Uva';
fwrite($arquivo, $fruta);
fclose($arquivo);

//Sobrescrevendo um arquivo 3
$fruta = 'Cereja';
file_put_contents('frutas1.txt', $fruta);

//Escrevendo no final do arquivo 2
$fruta = PHP_EOL . 'Kiwi';
file_put_contents('frutas1.txt', $fruta, FILE_APPEND);
