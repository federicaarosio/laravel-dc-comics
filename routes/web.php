<?php

use App\Http\Controllers\ComicController as ComicController;
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

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

// Route::resource('comics', ComicController::class);

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route::get('/comics/{id}', [ComicController::class, 'show']);