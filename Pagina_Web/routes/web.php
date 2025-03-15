<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/servicios', \App\Livewire\Servicios\Index::class)->name('servicios.index');
Route::get('/servicios/create', \App\Livewire\Servicios\Create::class)->name('servicios.create');
Route::get('/servicios/show/{servicio}', \App\Livewire\Servicios\Show::class)->name('servicios.show');
Route::get('/servicios/update/{servicio}', \App\Livewire\Servicios\Edit::class)->name('servicios.edit');

Route::get('/reservas', \App\Livewire\Reservas\Index::class)->name('reservas.index');
Route::get('/reservas/create', \App\Livewire\Reservas\Create::class)->name('reservas.create');
Route::get('/reservas/show/{reserva}', \App\Livewire\Reservas\Show::class)->name('reservas.show');
Route::get('/reservas/update/{reserva}', \App\Livewire\Reservas\Edit::class)->name('reservas.edit');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
