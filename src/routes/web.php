<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

Route::get('/', [PortofolioController::class, 'index'])->name('home');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
