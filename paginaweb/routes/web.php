<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ReservaController;
use App\Http\Middleware\RoleMiddleware;


Route::middleware(['auth', RoleMiddleware::class])->group(function () {
    Route::resource('servicios', ServicioController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('reservas', ReservaController::class);
