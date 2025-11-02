<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\ItemController; 
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});








Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', Categorycontroller::class);
Route::resource('item', ItemController::class);
Route::resource('transaction', TransactionController::class);
