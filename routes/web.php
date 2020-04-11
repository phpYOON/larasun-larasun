<?php
use Illuminate\Routing\Route;

Route::get('/',  function (){
    echo "home";
});


Route::get('/user/list/', 'UserController@list');



