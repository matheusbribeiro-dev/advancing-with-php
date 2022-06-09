<?php

$currentDirectory = dir('.');

while ($file = $currentDirectory->read()) {
    echo $file . PHP_EOL;
}