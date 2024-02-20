<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pacientes', PacienteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\PacienteController::class, 'index'])->name('home');
