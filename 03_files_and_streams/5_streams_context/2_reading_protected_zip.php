<?php

$context = stream_context_create([
    'zip' => [
        'password' => '123'
    ]
]);
echo file_get_contents('zip://zipwithpass.zip#sw-ordem.txt', false, $context);