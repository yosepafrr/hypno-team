<?php

use App\Http\Controllers\Autentikasi;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Home Controller
Route::get('/', [HomeController::class, 'wlc']);
Route::get('service', [HomeController::class, 'service']);


// Autentikasi Controller
Route::get('register', [Autentikasi::class, 'register']);
Route::get('login', [Autentikasi::class, 'login']);
Route::get('logout', [Autentikasi::class, 'logout']);