<?php

//Manipulando diretórios
$diretorioAtual = dir('.');

echo 'Caminho do diretório atual: ' . $diretorioAtual->path . PHP_EOL . PHP_EOL;

while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}

//Manipulando arquivos
$arquivoCursos = new SplFileObject('todos-cursos.csv', 'r');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivoCursos->getCTime());
echo $data->format('d/m/Y') . PHP_EOL;

//Utilizando foreach
foreach ($arquivoCursos as $linha) {
    echo utf8_encode($linha);
}