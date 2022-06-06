<?php

$file = fopen('cursos-php.txt', 'a');

$course = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($file, $course);

fclose($file);

//Outra forma de fazer:
file_put_contents('cursos-php.txt', $course, FILE_APPEND); // Para combinar Flags use '|'