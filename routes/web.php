<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartUpController;

Route::get('/', [StartUpController::class, 'dashboard'])->name('home');


Route::get('/regiter', [StartUpController::class, 'index'])->name('register');
Route::post('/register', [StartUpController::class, 'store'])->name('register.post');