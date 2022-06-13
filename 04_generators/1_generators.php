<?php
require 'ReaderFile.php';

$reader = new Utils\ReaderFile('movies.csv');

$content = $reader->read();

foreach ($content as $item) {
    printf('Teste; %s %s', $item[0], PHP_EOL);
}