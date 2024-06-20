<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//get -> view
//post ->store
//put ->store
//patch ->store / update
//delete ->delete

Route::get('/', function () {
    return view('login');
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

Route::get('/user/create',[UserController::class,'create']);
Route::get('/user/view',[UserController::class,'view']);
Route::get('/invoke',[DemoController::class,'__invoke']);
Route::resource('post', TestController::class);

Route::get('demo', function(){
    $name = "Ashish Bindra Ji";
    $welcome = 'Welcome :';
    return view('demo',compact('name','welcome'));
});