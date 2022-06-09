<?php

$movies = file('sw-ordem.txt');
$csvFile = fopen('movies.csv', 'w');

foreach ($movies as $movie) {
    if (stripos($movie, '1') === false && stripos($movie, '2') === false) {
        continue;
    }
    $line = [trim($movie), 'Sim'];
    fputcsv($csvFile, $line, ';');
}

fclose($csvFile);