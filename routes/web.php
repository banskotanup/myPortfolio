<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\AdminController;
use App\Http\Controllers\FrontEnd\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);