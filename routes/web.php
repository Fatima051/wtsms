<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');


