<?php
/*Configurações do xdebug para este modo:
xdebug.mode=profile
xdebug.output_dir=/var/www/05_xdebug/3_profile
xdebug.start_with_request=trigger
*/

require "Utils/FlatArray.php";

$flatArray = new FlatArray([
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8],
    [9, 0],
]);

foreach ($flatArray as $item) {
    echo $item . PHP_EOL;
}