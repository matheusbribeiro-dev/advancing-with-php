<?php

/*Para ler entradas do teclado basta abrir um stream para ele da seguinte forma*/
$newCourse = fgets(STDIN);//Constante que armazena o fopen do teclado

file_put_contents('cursos-php.txt', "\n$newCourse", FILE_APPEND);