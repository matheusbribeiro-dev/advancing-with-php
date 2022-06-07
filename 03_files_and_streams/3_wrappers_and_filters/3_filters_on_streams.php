<?php

$file = fopen('sw-ordem.txt', 'r');

stream_filter_append($file, 'string.toupper');//Adiciona um filtro

echo fread($file, filesize('sw-ordem.txt')) . PHP_EOL;

fclose($file);