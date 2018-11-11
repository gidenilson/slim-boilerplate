<?php

$app->get('/', 'App\Controllers\HomeController:home')->setName('index');
$app->get('/user', 'App\Controllers\UserController:index')->setName('user');