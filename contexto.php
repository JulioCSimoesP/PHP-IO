<?php

//Fazendo requisição http com contexto
$contexto = stream_context_create([
   'http' => [
       'method' => 'POST',
       'header' => "X-From: PHP\r\nContent-Type: text/plain",
       'content' => 'Requisicao de teste'
   ]
]);
echo file_get_contents('http://httpbin.org/post', false, $contexto);

//Acessando arquivo zip com contexto
$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);
echo file_get_contents('zip://listas.zip#lista-cursos.txt', false, $contexto);