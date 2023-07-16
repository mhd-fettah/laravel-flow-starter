<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

// Sample Group with auth
/*Route::middleware(['auth', 'active'])->group(function() {

    // Sample Controller
    Route::controller(SampleController::class)->prefix('/item')->group(function () {
        // Using Get method
        Route::get('/', 'index')->name('sample.item.index');

        // Using Post method
        Route::post('/store', 'store')->name('sample.item.store');

        // Using Delete method
        Route::delete('/{item}/delete', 'delete')->name('sample.item.delete')->can('delete', 'item');

        // Using Can ability
        Route::get('/{item}/edit', 'edit')->name('sample.item.edit')->can('update', 'item');
    });

});*/

// fall back route for any misspell
Route::fallback(function () {
    return redirect('/');
});
