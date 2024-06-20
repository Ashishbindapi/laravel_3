<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//get -> view
//post ->store
//put ->store
//patch ->store / update
//delete ->delete

Route::get('/', function () {
    return view('login');
});

Route::get('/login/store', [AdminController::class, 'store']); //Store
Route::get('/login/list', [AdminController::class, 'list']); //List
Route::get('/login/update', [AdminController::class, 'update']); //Update
Route::get('/login/delete', [AdminController::class, 'delete']); //Delete