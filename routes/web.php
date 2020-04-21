<?php
use Illuminate\Support\Facades\RouteFacade;

RouteFacade::get('/', function(){
    echo "_home_";
});

RouteFacade::get('/shop', function(){
    echo "_shop_";
});




















//Route::get('/user/list/', 'UserController@list');



