<?php
require __DIR__ . "/../vendor/autoload.php";

$app = require_once __DIR__ . "/../bootstrap/app.php";


$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
$kernel->handle( new \Illuminate\Http\Request() );





/*
$router = $kernel->getRouter();
$router->get('/user/list/', 'UserController@list');
$router->runRoute();
*/









