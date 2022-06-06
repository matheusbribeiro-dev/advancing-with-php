<?php
//Leia: https://www.php.net/manual/pt_BR/class.dateperiod.php

$start = new DateTime('2022-11-21');
$interval = new DateInterval('P4Y');
$period = new DatePeriod($start, $interval, 5);
/*Calculando período a cada 4 anos a partir de 2022-11-21 com recorrência de 5 vezes*/

foreach ($period as $date) {
    echo $date->format('d/m/Y') . PHP_EOL;
}