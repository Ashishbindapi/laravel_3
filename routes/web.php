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

Route::any('/test/post', function(){
    return view('test');
});

Route::get('demo', function(){
    $name = "Ashish Bindra Ji";
    $welcome = 'Welcome :';
    return view('templates.demo',compact('name','welcome'));
});