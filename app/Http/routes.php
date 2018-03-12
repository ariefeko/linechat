<?php

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

$app->get('/', 'ChatController@line');
$app->get('/line', 'ChatController@line');
