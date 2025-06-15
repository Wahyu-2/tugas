<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

Route::get('/listproduk', [ListController::class, 'index'])->name('list.index');
Route::get('/listproduk/create', [ListController::class, 'create'])->name('list.create');
Route::post('/listproduk', [ListController::class, 'store'])->name('list.store');
Route::get('/listproduk/{id}/edit', [ListController::class, 'edit'])->name('list.edit');
Route::put('/listproduk/{id}', [ListController::class, 'update'])->name('list.update');
Route::delete('/listproduk/{id}', [ListController::class, 'destroy'])->name('list.destroy');
