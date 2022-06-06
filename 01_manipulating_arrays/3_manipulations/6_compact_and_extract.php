<?php

$data = [
    'name' => 'Matheus',
    'grade' => 10,
    'age' => 21
];

extract($data);//Cria variáveis a partir de um array, baseado nas suas chaves
var_dump($name, $grade, $age);

//Por outro lado, temos essa função que pega várias variáveis e transforma num array:
$newArray = compact('name', 'grade', 'age');


//Bônus, leia: https://www.alura.com.br/artigos/trabalhando-com-arrays-em-php