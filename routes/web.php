<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelPrincipalController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');


Route::get('/panel-citas', [PanelPrincipalController::class, 'index'])->name('panel.index');
