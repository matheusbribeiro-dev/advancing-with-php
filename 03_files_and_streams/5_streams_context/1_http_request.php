<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-from: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo'
    ]
]);
echo file_get_contents('http://httpbin.org/post', false, $context);