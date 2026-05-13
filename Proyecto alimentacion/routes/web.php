<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentoController;

Route::get('/', function () {
    return view('alimentos.home');
});

Route::get('/alimento/{alimento}', [AlimentoController::class, 'show'])
    ->name('alimento.show');