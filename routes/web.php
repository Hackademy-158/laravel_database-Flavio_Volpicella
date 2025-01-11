<?php

use App\Models\Platform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PlatformController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/song/create', [SongsController::class, 'create'])->name('song.create');
Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('user.dashboard');
Route::post('/song/store', [SongsController::class, 'store'])->name('song.store');
Route::get('/song/index', [SongsController::class, 'index'])->name('song.index');
Route::delete('/song/delete/{song}', [SongsController::class, 'destroy'])->name('song.delete');
Route::get('/platform/index', [PlatformController::class, 'index'])->name('platform.index');
Route::get('/platform/create', [PlatformController::class, 'create'])->name('platform.create');
Route::post('/platform/store', [PlatformController::class, 'store'])->name('platform.store');
Route::delete('/platform/delete/{platform}', [PlatformController::class, 'destroy'])->name('platform.delete');
