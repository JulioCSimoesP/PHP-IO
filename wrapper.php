<?php

//Lendo retorno de uma requisitação https
$arquivo = file_get_contents('https://cat-fact.herokuapp.com/facts');
echo $arquivo . PHP_EOL . PHP_EOL;

//Lendo um arquivo compactado em um zip
$arquivo = file_get_contents('zip://compacto.zip#frutas1.txt');
echo $arquivo . PHP_EOL . PHP_EOL;