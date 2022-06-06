<?php

$grades = [10, 8, 9, 7];
/*Ordenando por valores OBS: para ordenar por chaves, adicione 'k' na frente da função: ksort*/
sort($grades);/*Ordena de forma crescente a função e retorna um bool.
Como a função recebe o parâmetro por referência... o array original será modificado*/

rsort($grades);/*Ordena de forma decrescente*/
/*Se estiver ordenando arrays associativos use 'a' no começo dessas funções para preservar as chaves: asort ou arsort*/

$classGrades = [
    [
        'Aluno' => 'Maria',
        'nota' => 9
    ],
    [
        'Aluno' => 'Mauro',
        'nota' => 5
    ],
    [
        'Aluno' => 'Matheus',
        'nota' => 10
    ],
];

/*function orderingGrades(array $gradeOne, array $gradeTwo): int
{
    if ($gradeOne['nota'] > $gradeTwo['nota']) {//Precisa retornar menor do que zero caso o primeiro parâmetro deva vir antes do segundo
        return -1;
    }

    if ($gradeTwo['nota'] > $gradeOne['nota']) {//Precisar retornar maior do que zero caso o segundo parâmetro deva vir primeiro
        return 1;
    }

    return 0;
}
usort($classGrades, 'orderingGrades');//Ordena o array baseado nos critérios escritos na função de callback
Foma otimizada de fazer o mesmo: */
usort($classGrades, fn(array $gradeOne, array $gradeTwo ) => $gradeTwo['nota'] <=> $gradeOne['nota']);


var_dump($classGrades);