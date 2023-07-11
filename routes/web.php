<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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