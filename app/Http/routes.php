<?php

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/line', 'ChatController@line');
