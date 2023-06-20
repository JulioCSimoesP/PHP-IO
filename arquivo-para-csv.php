<?php

//Utilizando funções antigas para conversão de encoding
$cursos = file('lista-cursos.txt');
$formacoes = file('lista-cursos-e-formacoes-completos.txt');

$arquivoCsv = fopen('todos-cursos.csv', 'w');

foreach ($cursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Curso'];
    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($formacoes as $formacao) {
    $linha = [trim(utf8_decode($formacao)), utf8_decode('Formação')];
    fputcsv($arquivoCsv, $linha, ';');
}
fclose($arquivoCsv);

//Utilizando funções modernas para conversão de encoding
$frutas1 = file('frutas1.txt');
$frutas2 = file('frutas2.txt');

$arquivoCsv = fopen('todas-frutas.csv', 'w');

foreach ($frutas1 as $fruta) {
    $linha = [trim(mb_convert_encoding($fruta, 'Windows-1252', 'UTF-8')), mb_convert_encoding('€€€', 'Windows-1252', 'UTF-8')];
    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($frutas2 as $fruta) {
    $linha = [trim(mb_convert_encoding($fruta, 'Windows-1252', 'UTF-8')), mb_convert_encoding('€€€', 'Windows-1252', 'UTF-8')];
    fputcsv($arquivoCsv, $linha, ';');
}
fclose($arquivoCsv);