<?php

use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Admin\PageController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [ComicsController::class, 'index'])->name('comic.index');

// Route::get('/comic/{comic}', [ComicsController::class, 'show'])->name('comic.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [PageController::class, "home"])->name('home');
    Route::resource('/comic', ComicsController::class);
});
