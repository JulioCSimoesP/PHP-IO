<?php

//Exibindo filtros disponíveis no php
var_dump(stream_get_filters());

//Aplicando filtro do php a um stream
$path = 'lista-cursos.txt';
$arquivo = fopen($path, 'r');
stream_filter_append($arquivo, 'string.toupper');
echo fread($arquivo, filesize($path)) . PHP_EOL . PHP_EOL;

//Aplicando filtro próprio a um stream
require_once 'MeuFiltro.php';
stream_filter_register('phpio.formacao', MeuFiltro::class);
$path = 'lista-cursos-e-formacoes-completos.txt';
$arquivo = fopen($path, 'r');
stream_filter_append($arquivo, 'phpio.formacao');
echo fread($arquivo, filesize($path)) . PHP_EOL . PHP_EOL;