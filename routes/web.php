<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/song/create', [SongsController::class, 'create'])->name('song.create');
Route::post('/song/store', [SongsController::class, 'store'])->name('song.store');
Route::get('/song/index', [SongsController::class, 'index'])->name('song.index');

