<?php

$data = ['Matheus', 10, 21];

/*Ao ter um array onde os dados não tem significado explícito - como num array associativo -
podemos criar variáveis com estes dados. Desta forma:*/
list($name, $grade, $age) = $data;
// Ou
[$name, $grade, $age] = $data;

var_dump($name, $grade, $age);