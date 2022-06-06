<?php

$file = fopen('sw-ordem.txt', 'r');/*Essa função serve para "abrirmos" um arquivo. Ela recebe o nome do
arquivo a ser aberto e o modo. Ela retorna uma espécie de ponteiro. Para ver mais detalhes acesse:
https://www.php.net/manual/pt_BR/function.fopen.php*/

while (!feof($file)) {//Função que representa o fim do arquivo
    $movie = fgets($file);//Função de recupera uma linha do começo ao fim e posiciona o "cursor" ao fim da mesma

    echo $movie;
}

fclose($file);//Sempre use essa função para fechar o arquivo.
