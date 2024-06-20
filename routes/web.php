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

// Route::prefix('admin/')->group(function(){
//     Route::get('store', [AdminController::class, 'store']); //Store
//     Route::get('list', [AdminController::class, 'list']); //List
//     Route::get('update', [AdminController::class, 'update']); //Update
//     Route::get('delete', [AdminController::class, 'delete']); //Delete
// });

Route::controller(AdminController::class)->group(function(){
    Route::prefix('admin/')->group(function(){
        Route::get('store', 'store'); //Store
        Route::get('list', 'list'); //List
        Route::get('update', 'update'); //Update
        Route::get('delete', 'delete'); //Delete
    });
});