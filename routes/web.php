<?php

use Illuminate\Support\Facades\Route;

//get -> view
//post ->store
//put ->store
//patch ->store / update
//delete ->delete

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    echo 'Welcome to Ashish Bindra Ji';
});