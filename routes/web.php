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

Route::get('/login/store', [AdminController::class, 'store']);