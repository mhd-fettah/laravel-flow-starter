<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LangController;

Auth::routes();

// languages switcher
Route::get('lang/{locale}', [LangController::class, 'locale']);

// public
Route::controller(HomeController::class)->prefix('home/')->group(function () {
    Route::get('/', 'index')->name('home');
});

// only auth
Route::middleware('auth')->group(function() {
    //controler group sample
    Route::controller(dashboardController::class)->prefix('dashboard/')->group(function () {
        Route::get('/main', 'index')->name('dashobard.main');
    });
});

// fall back route for any misspell
Route::fallback(function () {
    return redirect('home');
});