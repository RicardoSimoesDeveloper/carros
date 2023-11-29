<?php

use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('carros.welcome');

Route::get('/index', [CarroController::class, 'index'])->name('carros.index');

Route::get('/show/{id}', [CarroController::class, 'show'])->name('carros.show');

Route::get('/create', [CarroController::class, 'create'])->name('carros.create');

Route::post('/store', [CarroController::class, 'store'])->name('carros.store');

Route::get('/edit/{id}', [CarroController::class, 'edit'])->name('carros.edit');

Route::put('/update/{id}', [CarroController::class, 'update'])->name('carros.update');

Route::delete('/deletar/{id}', [CarroController::class, 'destroy'])->name('carros.destroy');