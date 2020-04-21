<?php
require __DIR__ . "/../vendor/autoload.php";
use Illuminate\Support\Facades\RouteFacade;

$app = require_once dirname(__DIR__) . "/bootstrap/app.php";
$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
$kernel->handle( $app, new \Illuminate\Http\Request() );








/*
$router = $kernel->getRouter();
$router->get('/user/list/', 'UserController@list');
$router->runRoute();
*/









