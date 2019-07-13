<?php

use App\Http\Controllers\ProductsController;

// Route::get('/', 'ProductsController@index');
Route::get('/', [ProductsController::class, 'index']);
