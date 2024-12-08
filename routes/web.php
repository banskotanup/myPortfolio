<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\AdminController;
use App\Http\Controllers\FrontEnd\HomeController;

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/admin_login', [AdminController::class, 'login']);