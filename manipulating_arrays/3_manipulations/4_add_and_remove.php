<?php
$students = [
    'Matheus',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];
//Formas de adicionar elementos:
//Adiciona ao final
array_push($students, 'Outro aluno', 'Outro aluno 2');
$students[] = 'Outro aluno 3';

//Adiciona no início
array_unshift($students, 'Outro aluno 0');

//Formas de remover elementos:
//Remove do início
array_shift($students);

//Remove o último elemento:
array_pop($students);