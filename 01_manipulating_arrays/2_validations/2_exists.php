<?php

$grades = [
    'Matheus' => 10,
    'Lucas' => 8,
    'Henrique' => 8
];

$exists = array_key_exists('Matheus', $grades);/*Verifica se existe uma chave específica no array.
Não considera o valor da chave, ou seja, se o valor da chave for null - não teria utilidade para nós - retornaria
true mesmo assim.
Mas, se você precisa verificar se a chave existe e caso exista, seu valor teria que diferir de null use:*/
$exists = isset($grades['Matheus']);

var_dump($exists);

/*Podemos verificar também se determinado valor existe dentro do array:*/
$valueExists = in_array(10, $grades);
$valueExists = in_array(10, $grades, true);//Faz a verificação estrita, ou seja, considera o tipo

var_dump($valueExists);

/*Para recuperar a chave que possua determinado valor use:*/
$keyWithValue = array_search(10, $grades);
var_dump($keyWithValue);