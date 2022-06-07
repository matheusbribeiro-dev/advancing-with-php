<?php
require '4_creating_filters/MyFilter.php';

$file = fopen('sw-ordem.txt', 'r');

stream_filter_append($file, 'string.toupper');//Adiciona um filtro

echo fread($file, filesize('sw-ordem.txt')) . PHP_EOL;

fclose($file);

//Usando um filtro criado por nós
$file = fopen('sw-ordem.txt', 'r');

stream_filter_register('temps.sw', MyFilter::class);

stream_filter_append($file, 'temps.sw');

echo fread($file, filesize('sw-ordem.txt')) . PHP_EOL;

fclose($file);