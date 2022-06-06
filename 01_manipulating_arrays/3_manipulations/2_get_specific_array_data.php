<?php

$array = [
    'Nome' => 'Matheus',
    'idade' => 21,
    'cargo' => 'Programador'
];

$keys = array_keys($array);/*Retorna um array com as chaves do array passado por parâmetro*/
$values = array_values($array);/*Retorna um array com os valores do array passado por parâmetro*/
$newArray = array_combine($values, $keys);/*Combina os dois arrays. Neste caso estamos colocando
os valores do $array como chave neste novo array e as chaves do $array para serem os valores.

Para fazer esta mesma operação de forma mais prática, basta usar a função:*/
$newArray2 = array_flip($array);

var_dump($keys);