<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::post('/supports', [SupportController::class, 'store'])->name('support.store');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('support.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
