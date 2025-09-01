<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ShopsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/services/cupons', function () {
    return view('pages.services.cupons');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/shop', [ShopsController::class, 'index']);

Route::resource('/items', ItemsController::class);
