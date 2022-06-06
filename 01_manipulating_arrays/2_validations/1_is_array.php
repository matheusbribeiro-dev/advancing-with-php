<?php

$array = [1, 2, 3, 4];

if (is_array($array)) {//Verificando se é de fato um array
    echo 'Sim, é um array' . PHP_EOL;
}

$isList = array_is_list($array);/*Presente no PHP 8.1; Retorna true se for um array numérico,
começa com 0 e a partir daí são índices crescentes*/