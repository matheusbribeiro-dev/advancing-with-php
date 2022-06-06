<?php

$file = fopen('sw-ordem.txt', 'r');
$fileSize = filesize('sw-ordem.txt');//pega o tamanho em bytes do arquivo

$movies = fread($file, $fileSize);/*essa função recupera o arquivo baseado na
quantidade de bytes passados no segundo parâmetro. É necessário ter cuidado visto que o arquivo é aberto na memória RAM*/

echo $movies;

fclose($file);

//Outra forma de fazer tudo isso acima:

$movies = file_get_contents('sw-ordem.txt');//Abre o arquivo, pega o conteúdo e fecha.

//Outra forma de fazer, agora recuperando o arquivo em forma de array

$movies = file('sw-ordem.txt');

var_dump($movies);