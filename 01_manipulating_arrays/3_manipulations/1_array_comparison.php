<?php

$gradesOne = [
    'Jorge' => 8,
    'Izabella' => 6,
    'Lucas' => 10
];

$gradesTwo = [
    'Izabella' => 6,
    'Lucas' => 10
];

$diff = array_diff($gradesOne, $gradesTwo);/*Retorna um array com todos os valores
que tem no primeiro parâmetro, mas, que não tenha nos demais. Caso os arrays tenham uma mesma chave
com valores diferentes ele irá retornar nessa função mesmo assim visto que ela considera apenas os valores*/

var_dump($diff);

/*Para ter a mesma funcionalidade, mas, agora considerando apenas as chaves user:*/
$diffKeys = array_diff_key($gradesOne, $gradesTwo);

/*Para ter a mesma funcionalidade, mas, agora considerando tanto as chaves quanto os valores user:*/
$diffArray = array_diff_assoc($gradesOne, $gradesTwo);