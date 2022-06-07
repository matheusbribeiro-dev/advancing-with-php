<?php

/*Para escrever na tela basta abrir um stream da seguinte forma*/
fwrite(STDOUT, "Olá mundo\n");

//Um modo de ler um arquivo e passar para outro stream sem fazer o processo de resgatar e escrever:
$courses = fopen('cursos-php.txt', 'r');
stream_copy_to_stream($courses, STDOUT);