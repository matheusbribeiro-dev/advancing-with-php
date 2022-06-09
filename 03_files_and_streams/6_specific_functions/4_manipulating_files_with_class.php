<?php

$file = new SplFileObject('movies.csv', 'r');

while (!$file->eof()) {
    $line = $file->fgetcsv(';');

    echo $line[0] . PHP_EOL;
}

//https://www.php.net/manual/en/spl.files.php