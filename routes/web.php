<?php

use App\Http\Controllers\ComicController as ComicController;
use App\Http\Controllers\MovieController as MovieController;
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

// Home
Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');


// Comic
    // Route::resource('comics', ComicController::class);
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::post('comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');

//Movie
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');