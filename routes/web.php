<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])
    ->name('comics.index');

Route::get('/comics/create', [MainController::class, 'create'])
    ->name('comics.create');

Route::post('/comics', [MainController::class, 'store'])
    ->name('comics.store');

Route::get('/comics/{id}', [MainController::class, 'show'])
    ->name('comics.show');

Route::delete('/comics/{id}', [MainController::class, 'destroy'])
    ->name('comics.destroy');


Route::get('/comics/{id}/edit', [MainController::class, 'edit'])
    ->name('comics.edit');
Route::put('/comics/{id}', [MainController::class, 'update'])
    ->name('comics.update');