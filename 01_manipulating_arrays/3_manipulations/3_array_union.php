<?php

$students = [
    'Matheus',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$newStudents = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

$allStudents = array_merge($students, $newStudents);/*Adiciona no fim do primeiro array os
demais arrays passados por parâmetro. Obs: Esta função não preserva chaves numéricas*/

$withSpread = [...$students, ...$newStudents];//Outra forma de fazer o mesmo